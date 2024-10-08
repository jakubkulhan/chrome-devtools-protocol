<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.ReportingApiEndpoint.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportingApiEndpoint implements \JsonSerializable
{
	/**
	 * The URL of the endpoint to which reports may be delivered.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Name of the endpoint group.
	 *
	 * @var string
	 */
	public $groupName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->groupName)) {
			$instance->groupName = (string)$data->groupName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->groupName !== null) {
			$data->groupName = $this->groupName;
		}
		return $data;
	}
}
