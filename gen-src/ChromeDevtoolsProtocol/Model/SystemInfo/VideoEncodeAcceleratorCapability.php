<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Describes a supported video encoding profile with its associated maximum resolution and maximum framerate.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class VideoEncodeAcceleratorCapability implements \JsonSerializable
{
	/**
	 * Video codec profile that is supported, e.g H264 Main.
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
	 * Maximum encoding framerate in frames per second supported for this |profile|, as fraction's numerator and denominator, e.g. 24/1 fps, 24000/1001 fps, etc.
	 *
	 * @var int
	 */
	public $maxFramerateNumerator;

	/** @var int */
	public $maxFramerateDenominator;


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
		if (isset($data->maxFramerateNumerator)) {
			$instance->maxFramerateNumerator = (int)$data->maxFramerateNumerator;
		}
		if (isset($data->maxFramerateDenominator)) {
			$instance->maxFramerateDenominator = (int)$data->maxFramerateDenominator;
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
		if ($this->maxFramerateNumerator !== null) {
			$data->maxFramerateNumerator = $this->maxFramerateNumerator;
		}
		if ($this->maxFramerateDenominator !== null) {
			$data->maxFramerateDenominator = $this->maxFramerateDenominator;
		}
		return $data;
	}
}
