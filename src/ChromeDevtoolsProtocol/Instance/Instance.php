<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Instance\Version;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
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
		$this->host = $host;
		$this->port = $port;
		$this->httpClient = $httpClient ?? new Client([
				"headers" => [
					"ChromeDevtoolsProtocol PHP/" . PHP_VERSION,
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

	public function activateTabById(ContextInterface $ctx, string $id): void
	{
		$this->httpClient->request("POST", "http://{$this->host}:{$this->port}/json/activate/{$id}", [
			"timeout" => $ctx->getDeadline() !== null ? $ctx->deadlineFromNow() : 0,
		]);
	}

	public function closeTabById(ContextInterface $ctx, string $id): void
	{
		$this->httpClient->request("POST", "http://{$this->host}:{$this->port}/json/close/{$id}", [
			"timeout" => $ctx->getDeadline() !== null ? $ctx->deadlineFromNow() : 0,
		]);
	}

}
