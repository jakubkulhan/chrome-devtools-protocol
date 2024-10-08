<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.clearCookies command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearCookiesRequest implements \JsonSerializable
{
	/**
	 * Browser context to use when called on the browser endpoint.
	 *
	 * @var string
	 */
	public $browserContextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ClearCookiesRequestBuilder
	 */
	public static function builder(): ClearCookiesRequestBuilder
	{
		return new ClearCookiesRequestBuilder();
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
