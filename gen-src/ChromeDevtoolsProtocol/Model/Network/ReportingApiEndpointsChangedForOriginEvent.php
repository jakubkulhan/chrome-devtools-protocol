<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.ReportingApiEndpointsChangedForOriginEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportingApiEndpointsChangedForOriginEvent implements \JsonSerializable
{
	/**
	 * Origin of the document(s) which configured the endpoints.
	 *
	 * @var string
	 */
	public $origin;

	/** @var ReportingApiEndpoint[] */
	public $endpoints;


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
		if (isset($data->endpoints)) {
			$instance->endpoints = [];
			foreach ($data->endpoints as $item) {
				$instance->endpoints[] = ReportingApiEndpoint::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->endpoints !== null) {
			$data->endpoints = [];
			foreach ($this->endpoints as $item) {
				$data->endpoints[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
