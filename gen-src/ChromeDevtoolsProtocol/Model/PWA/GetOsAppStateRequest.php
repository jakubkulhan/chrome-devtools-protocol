<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Request for PWA.getOsAppState command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOsAppStateRequest implements \JsonSerializable
{
	/**
	 * The id from the webapp's manifest file, commonly it's the url of the site installing the webapp. See https://web.dev/learn/pwa/web-app-manifest.
	 *
	 * @var string
	 */
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
	 * @return GetOsAppStateRequestBuilder
	 */
	public static function builder(): GetOsAppStateRequestBuilder
	{
		return new GetOsAppStateRequestBuilder();
	}
}
