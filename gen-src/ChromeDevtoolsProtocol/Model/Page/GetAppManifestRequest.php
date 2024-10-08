<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.getAppManifest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAppManifestRequest implements \JsonSerializable
{
	/** @var string|null */
	public $manifestId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->manifestId)) {
			$instance->manifestId = (string)$data->manifestId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->manifestId !== null) {
			$data->manifestId = $this->manifestId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetAppManifestRequestBuilder
	 */
	public static function builder(): GetAppManifestRequestBuilder
	{
		return new GetAppManifestRequestBuilder();
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
