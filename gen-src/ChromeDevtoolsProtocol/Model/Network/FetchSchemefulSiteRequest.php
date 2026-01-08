<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.fetchSchemefulSite command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FetchSchemefulSiteRequest implements \JsonSerializable
{
	/**
	 * The URL origin.
	 *
	 * @var string
	 */
	public $origin;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return FetchSchemefulSiteRequestBuilder
	 */
	public static function builder(): FetchSchemefulSiteRequestBuilder
	{
		return new FetchSchemefulSiteRequestBuilder();
	}
}
