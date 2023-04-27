<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.runBounceTrackingMitigations command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RunBounceTrackingMitigationsResponse implements \JsonSerializable
{
	/** @var string[] */
	public $deletedSites;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->deletedSites)) {
			$instance->deletedSites = [];
			foreach ($data->deletedSites as $item) {
				$instance->deletedSites[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->deletedSites !== null) {
			$data->deletedSites = [];
			foreach ($this->deletedSites as $item) {
				$data->deletedSites[] = $item;
			}
		}
		return $data;
	}
}
