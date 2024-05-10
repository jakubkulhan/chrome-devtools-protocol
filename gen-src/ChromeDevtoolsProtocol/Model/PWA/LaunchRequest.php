<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Request for PWA.launch command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LaunchRequest implements \JsonSerializable
{
	/** @var string */
	public $manifestId;

	/** @var string|null */
	public $url;


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
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->manifestId !== null) {
			$data->manifestId = $this->manifestId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return LaunchRequestBuilder
	 */
	public static function builder(): LaunchRequestBuilder
	{
		return new LaunchRequestBuilder();
	}
}
