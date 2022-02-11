<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Default font sizes.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FontSizes implements \JsonSerializable
{
	/**
	 * Default standard font size.
	 *
	 * @var int|null
	 */
	public $standard;

	/**
	 * Default fixed font size.
	 *
	 * @var int|null
	 */
	public $fixed;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->standard)) {
			$instance->standard = (int)$data->standard;
		}
		if (isset($data->fixed)) {
			$instance->fixed = (int)$data->fixed;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->standard !== null) {
			$data->standard = $this->standard;
		}
		if ($this->fixed !== null) {
			$data->fixed = $this->fixed;
		}
		return $data;
	}
}
