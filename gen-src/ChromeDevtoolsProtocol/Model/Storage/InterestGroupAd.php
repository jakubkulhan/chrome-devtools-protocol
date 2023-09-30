<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Ad advertising element inside an interest group.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InterestGroupAd implements \JsonSerializable
{
	/** @var string */
	public $renderURL;

	/** @var string|null */
	public $metadata;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->renderURL)) {
			$instance->renderURL = (string)$data->renderURL;
		}
		if (isset($data->metadata)) {
			$instance->metadata = (string)$data->metadata;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->renderURL !== null) {
			$data->renderURL = $this->renderURL;
		}
		if ($this->metadata !== null) {
			$data->metadata = $this->metadata;
		}
		return $data;
	}
}
