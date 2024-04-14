<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.Screenshot.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Screenshot implements \JsonSerializable
{
	/** @var ImageResource */
	public $image;

	/** @var string */
	public $formFactor;

	/** @var string|null */
	public $label;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->image)) {
			$instance->image = ImageResource::fromJson($data->image);
		}
		if (isset($data->formFactor)) {
			$instance->formFactor = (string)$data->formFactor;
		}
		if (isset($data->label)) {
			$instance->label = (string)$data->label;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->image !== null) {
			$data->image = $this->image->jsonSerialize();
		}
		if ($this->formFactor !== null) {
			$data->formFactor = $this->formFactor;
		}
		if ($this->label !== null) {
			$data->label = $this->label;
		}
		return $data;
	}
}
