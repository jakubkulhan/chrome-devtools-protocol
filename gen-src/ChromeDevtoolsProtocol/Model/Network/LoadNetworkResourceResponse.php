<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.loadNetworkResource command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadNetworkResourceResponse implements \JsonSerializable
{
	/** @var LoadNetworkResourcePageResult */
	public $resource;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->resource)) {
			$instance->resource = LoadNetworkResourcePageResult::fromJson($data->resource);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->resource !== null) {
			$data->resource = $this->resource->jsonSerialize();
		}
		return $data;
	}
}
