<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.getRelatedWebsiteSets command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRelatedWebsiteSetsResponse implements \JsonSerializable
{
	/** @var RelatedWebsiteSet[] */
	public $sets;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sets)) {
			$instance->sets = [];
			foreach ($data->sets as $item) {
				$instance->sets[] = RelatedWebsiteSet::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sets !== null) {
			$data->sets = [];
			foreach ($this->sets as $item) {
				$data->sets[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
