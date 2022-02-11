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
	public $renderUrl;

	/** @var string|null */
	public $metadata;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->renderUrl)) {
			$instance->renderUrl = (string)$data->renderUrl;
		}
		if (isset($data->metadata)) {
			$instance->metadata = (string)$data->metadata;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->renderUrl !== null) {
			$data->renderUrl = $this->renderUrl;
		}
		if ($this->metadata !== null) {
			$data->metadata = $this->metadata;
		}
		return $data;
	}
}
