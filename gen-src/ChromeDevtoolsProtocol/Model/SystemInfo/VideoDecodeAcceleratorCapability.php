<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Describes a supported video decoding profile with its associated minimum and maximum resolutions.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class VideoDecodeAcceleratorCapability implements \JsonSerializable
{
	/**
	 * Video codec profile that is supported, e.g. VP9 Profile 2.
	 *
	 * @var string
	 */
	public $profile;

	/**
	 * Maximum video dimensions in pixels supported for this |profile|.
	 *
	 * @var Size
	 */
	public $maxResolution;

	/**
	 * Minimum video dimensions in pixels supported for this |profile|.
	 *
	 * @var Size
	 */
	public $minResolution;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->profile)) {
			$instance->profile = (string)$data->profile;
		}
		if (isset($data->maxResolution)) {
			$instance->maxResolution = Size::fromJson($data->maxResolution);
		}
		if (isset($data->minResolution)) {
			$instance->minResolution = Size::fromJson($data->minResolution);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->profile !== null) {
			$data->profile = $this->profile;
		}
		if ($this->maxResolution !== null) {
			$data->maxResolution = $this->maxResolution->jsonSerialize();
		}
		if ($this->minResolution !== null) {
			$data->minResolution = $this->minResolution->jsonSerialize();
		}
		return $data;
	}
}
