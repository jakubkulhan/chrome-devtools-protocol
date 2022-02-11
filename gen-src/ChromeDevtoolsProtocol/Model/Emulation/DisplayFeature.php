<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Named type Emulation.DisplayFeature.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DisplayFeature implements \JsonSerializable
{
	/**
	 * Orientation of a display feature in relation to screen
	 *
	 * @var string
	 */
	public $orientation;

	/**
	 * The offset from the screen origin in either the x (for vertical orientation) or y (for horizontal orientation) direction.
	 *
	 * @var int
	 */
	public $offset;

	/**
	 * A display feature may mask content such that it is not physically displayed - this length along with the offset describes this area. A display feature that only splits content will have a 0 mask_length.
	 *
	 * @var int
	 */
	public $maskLength;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->orientation)) {
			$instance->orientation = (string)$data->orientation;
		}
		if (isset($data->offset)) {
			$instance->offset = (int)$data->offset;
		}
		if (isset($data->maskLength)) {
			$instance->maskLength = (int)$data->maskLength;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->orientation !== null) {
			$data->orientation = $this->orientation;
		}
		if ($this->offset !== null) {
			$data->offset = $this->offset;
		}
		if ($this->maskLength !== null) {
			$data->maskLength = $this->maskLength;
		}
		return $data;
	}
}
