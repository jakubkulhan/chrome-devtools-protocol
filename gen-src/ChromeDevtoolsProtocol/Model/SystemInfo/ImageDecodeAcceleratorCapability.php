<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Describes a supported image decoding profile with its associated minimum and maximum resolutions and subsampling.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ImageDecodeAcceleratorCapability implements \JsonSerializable
{
	/**
	 * Image coded, e.g. Jpeg.
	 *
	 * @var string
	 */
	public $imageType;

	/**
	 * Maximum supported dimensions of the image in pixels.
	 *
	 * @var Size
	 */
	public $maxDimensions;

	/**
	 * Minimum supported dimensions of the image in pixels.
	 *
	 * @var Size
	 */
	public $minDimensions;

	/**
	 * Optional array of supported subsampling formats, e.g. 4:2:0, if known.
	 *
	 * @var string[]
	 */
	public $subsamplings;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->imageType)) {
			$instance->imageType = (string)$data->imageType;
		}
		if (isset($data->maxDimensions)) {
			$instance->maxDimensions = Size::fromJson($data->maxDimensions);
		}
		if (isset($data->minDimensions)) {
			$instance->minDimensions = Size::fromJson($data->minDimensions);
		}
		if (isset($data->subsamplings)) {
			$instance->subsamplings = [];
		if (isset($data->subsamplings)) {
			$instance->subsamplings = [];
			foreach ($data->subsamplings as $item) {
				$instance->subsamplings[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->imageType !== null) {
			$data->imageType = $this->imageType;
		}
		if ($this->maxDimensions !== null) {
			$data->maxDimensions = $this->maxDimensions->jsonSerialize();
		}
		if ($this->minDimensions !== null) {
			$data->minDimensions = $this->minDimensions->jsonSerialize();
		}
		if ($this->subsamplings !== null) {
			$data->subsamplings = [];
		if ($this->subsamplings !== null) {
			$data->subsamplings = [];
			foreach ($this->subsamplings as $item) {
				$data->subsamplings[] = $item;
			}
		}
		}
		return $data;
	}
}
