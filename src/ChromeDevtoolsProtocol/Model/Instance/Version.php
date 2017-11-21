<?php
namespace ChromeDevtoolsProtocol\Model\Instance;

/**
 * Response to
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class Version
{

	/** @var string */
	public $browser;

	/** @var string */
	public $protocolVersion;

	/** @var string */
	public $userAgent;

	/** @var string */
	public $v8Version;

	/** @var string */
	public $webkitVersion;

	/** @var string */
	public $webSocketDebuggerUrl;

	public static function fromJson($data): self
	{
		$instance = new static();
		$instance->browser = $data->{"Browser"};
		$instance->protocolVersion = $data->{"Protocol-Version"};
		$instance->userAgent = $data->{"User-Agent"};
		$instance->v8Version = $data->{"V8-Version"};
		$instance->webkitVersion = $data->{"WebKit-Version"};
		$instance->webSocketDebuggerUrl = $data->{"webSocketDebuggerUrl"};
		return $instance;
	}

}
