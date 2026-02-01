<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

/**
 * Request for Extensions.loadUnpacked command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadUnpackedRequest implements \JsonSerializable
{
	/**
	 * Absolute file path.
	 *
	 * @var string
	 */
	public $path;

	/**
	 * Enable the extension in incognito
	 *
	 * @var bool|null
	 */
	public $enableInIncognito;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->path)) {
			$instance->path = (string)$data->path;
		}
		if (isset($data->enableInIncognito)) {
			$instance->enableInIncognito = (bool)$data->enableInIncognito;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->path !== null) {
			$data->path = $this->path;
		}
		if ($this->enableInIncognito !== null) {
			$data->enableInIncognito = $this->enableInIncognito;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return LoadUnpackedRequestBuilder
	 */
	public static function builder(): LoadUnpackedRequestBuilder
	{
		return new LoadUnpackedRequestBuilder();
	}
}
