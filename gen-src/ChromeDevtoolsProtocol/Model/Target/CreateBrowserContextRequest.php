<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.createBrowserContext command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateBrowserContextRequest implements \JsonSerializable
{
	/**
	 * If specified, disposes this context when debugging session disconnects.
	 *
	 * @var bool|null
	 */
	public $disposeOnDetach;

	/**
	 * Proxy server, similar to the one passed to --proxy-server
	 *
	 * @var string|null
	 */
	public $proxyServer;

	/**
	 * Proxy bypass list, similar to the one passed to --proxy-bypass-list
	 *
	 * @var string|null
	 */
	public $proxyBypassList;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->disposeOnDetach)) {
			$instance->disposeOnDetach = (bool)$data->disposeOnDetach;
		}
		if (isset($data->proxyServer)) {
			$instance->proxyServer = (string)$data->proxyServer;
		}
		if (isset($data->proxyBypassList)) {
			$instance->proxyBypassList = (string)$data->proxyBypassList;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->disposeOnDetach !== null) {
			$data->disposeOnDetach = $this->disposeOnDetach;
		}
		if ($this->proxyServer !== null) {
			$data->proxyServer = $this->proxyServer;
		}
		if ($this->proxyBypassList !== null) {
			$data->proxyBypassList = $this->proxyBypassList;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CreateBrowserContextRequestBuilder
	 */
	public static function builder(): CreateBrowserContextRequestBuilder
	{
		return new CreateBrowserContextRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
