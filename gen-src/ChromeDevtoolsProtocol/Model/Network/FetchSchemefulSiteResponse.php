<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.fetchSchemefulSite command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FetchSchemefulSiteResponse implements \JsonSerializable
{
	/**
	 * The corresponding schemeful site.
	 *
	 * @var string
	 */
	public $schemefulSite;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->schemefulSite)) {
			$instance->schemefulSite = (string)$data->schemefulSite;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->schemefulSite !== null) {
			$data->schemefulSite = $this->schemefulSite;
		}
		return $data;
	}
}
