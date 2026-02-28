<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\DevtoolsClient;
use ChromeDevtoolsProtocol\Exception\InvalidArgumentException;
use ChromeDevtoolsProtocol\Exception\RuntimeException;
use ChromeDevtoolsProtocol\Model\Instance\Version;
use ChromeDevtoolsProtocol\Model\Target\AttachToTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\CloseTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\CreateBrowserContextRequest;
use ChromeDevtoolsProtocol\Model\Target\CreateBrowserContextRequestBuilder;
use ChromeDevtoolsProtocol\Model\Target\CreateTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\DisposeBrowserContextRequest;
use ChromeDevtoolsProtocol\Session;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * Instance of running Chrome.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class Instance implements InstanceInterface, InternalInstanceInterface
{

	/** @var string */
	private $host;

	/** @var int */
	private $port;

	/** @var ClientInterface */
	private $httpClient;

	public function __construct(string $host, int $port, ?ClientInterface $httpClient = null)
	{
		// resolve host to IP, if not already, otherwise Chrome won't respond, see https://chromium-review.googlesource.com/c/chromium/src/+/952522
		if (filter_var($host, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6) === false) {
			if (($ip = gethostbyname($host)) === $host) {
				throw new InvalidArgumentException(sprintf(
					"Could not resolve host [%s] to IP.",
					$host
				));
			}

			$host = $ip;
		}

		$this->host = $host;
		$this->port = $port;
		$this->httpClient = $httpClient ?? new Client([
				"headers" => [
					"User-Agent" => "ChromeDevtoolsProtocol PHP/" . PHP_VERSION,
				],
			]);
	}

	public function tabs(ContextInterface $ctx): array
	{
		$response = $this->httpClient->request("POST", "http://{$this->host}:{$this->port}/json/list", [
			"timeout" => $ctx->getDeadline() !== null ? $ctx->deadlineFromNow() : 0,
		]);

		$tabs = [];
		foreach (json_decode($response->getBody()->getContents()) as $tabData) {
			$tabs[] = new Tab($tabData, $this);
		}

		return $tabs;
	}

	public function open(ContextInterface $ctx, ?string $url = null): Tab
	{
		$response = $this->httpClient->request(
			"POST",
			"http://{$this->host}:{$this->port}/json/new" . ($url !== null ? "?" . urlencode($url) : ""),
			[
				"timeout" => $ctx->getDeadline() !== null ? $ctx->deadlineFromNow() : 0,
			]
		);
		return new Tab(json_decode($response->getBody()->getContents()), $this);
	}

	public function version(ContextInterface $ctx): Version
	{
		$response = $this->httpClient->request("POST", "http://{$this->host}:{$this->port}/json/version", [
			"timeout" => $ctx->getDeadline() !== null ? $ctx->deadlineFromNow() : 0,
		]);
		return Version::fromJson(json_decode($response->getBody()->getContents()));
	}

	public function createSession(ContextInterface $ctx, string $url = "about:blank"): Session
	{
		$version = $this->version($ctx);

		if (stripos($version->browser, "headless") === false) {
			throw new RuntimeException(sprintf(
				"Only headless Chrome supports creating isolated contexts, current Chrome is [%s].",
				$version->browser
			));
		}

		if ($version->webSocketDebuggerUrl === null) {
			throw new RuntimeException("No browser debugger URL. Try upgrading to newer version of Chrome.");
		}

		$browser = DevtoolsClient::createFromDebuggerUrl($version->webSocketDebuggerUrl);
		try {
			$browserContextId = $browser->target()->createBrowserContext($ctx, CreateBrowserContextRequest::builder()->build())->browserContextId;
			try {
				$targetId = $browser->target()->createTarget(
					$ctx,
					CreateTargetRequest::builder()
						->setBrowserContextId($browserContextId)
						->setUrl("about:blank")
						->build()
				)->targetId;
				try {
					$sessionId = $browser->target()->attachToTarget(
						$ctx,
						AttachToTargetRequest::builder()
							->setTargetId($targetId)
							->build()
					)->sessionId;

					return new Session($browser, $browserContextId, $targetId, $sessionId);

				} catch (\Exception $e) {
					$browser->target()->closeTarget(
						$ctx,
						CloseTargetRequest::builder()
							->setTargetId($targetId)
							->build()
					);

					throw $e;
				}

			} catch (\Exception $e) {
				$browser->target()->disposeBrowserContext(
					$ctx,
					DisposeBrowserContextRequest::builder()
						->setBrowserContextId($browserContextId)
						->build()
				);

				throw $e;
			}

		} catch (\Exception $e) {
			$browser->close();

			throw $e;
		}
	}

	/**
	 * @internal
	 */
	public function activateTabById(ContextInterface $ctx, string $id): void
	{
		$this->httpClient->request("POST", "http://{$this->host}:{$this->port}/json/activate/{$id}", [
			"timeout" => $ctx->getDeadline() !== null ? $ctx->deadlineFromNow() : 0,
		]);
	}

	/**
	 * @internal
	 */
	public function closeTabById(ContextInterface $ctx, string $id): void
	{
		$this->httpClient->request("POST", "http://{$this->host}:{$this->port}/json/close/{$id}", [
			"timeout" => $ctx->getDeadline() !== null ? $ctx->deadlineFromNow() : 0,
		]);
	}

}
