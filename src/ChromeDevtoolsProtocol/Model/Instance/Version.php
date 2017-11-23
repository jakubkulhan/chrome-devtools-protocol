<?php
namespace ChromeDevtoolsProtocol\Model\Instance;

/**
 * Response to /json/version request.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class Version
{

	/** @var string|null */
	public $browser;

	/** @var string|null */
	public $protocolVersion;

	/** @var string|null */
	public $userAgent;

	/** @var string|null */
	public $v8Version;

	/** @var string|null */
	public $webkitVersion;

	/** @var string|null */
	public $webSocketDebuggerUrl;

	public static function fromJson($data): self
	{
		$instance = new static();
		$instance->browser = $data->{"Browser"} ?? null;
		$instance->protocolVersion = $data->{"Protocol-Version"} ?? null;
		$instance->userAgent = $data->{"User-Agent"} ?? null;
		$instance->v8Version = $data->{"V8-Version"} ?? null;
		$instance->webkitVersion = $data->{"WebKit-Version"} ?? null;
		$instance->webSocketDebuggerUrl = $data->{"webSocketDebuggerUrl"} ?? null;
		return $instance;
	}

}
