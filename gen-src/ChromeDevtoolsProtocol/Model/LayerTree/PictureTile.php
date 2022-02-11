<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Serialized fragment of layer picture along with its offset within the layer.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PictureTile implements \JsonSerializable
{
	/**
	 * Offset from owning layer left boundary
	 *
	 * @var int|float
	 */
	public $x;

	/**
	 * Offset from owning layer top boundary
	 *
	 * @var int|float
	 */
	public $y;

	/**
	 * Base64-encoded snapshot data. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $picture;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->x)) {
			$instance->x = $data->x;
		}
		if (isset($data->y)) {
			$instance->y = $data->y;
		}
		if (isset($data->picture)) {
			$instance->picture = (string)$data->picture;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->x !== null) {
			$data->x = $this->x;
		}
		if ($this->y !== null) {
			$data->y = $this->y;
		}
		if ($this->picture !== null) {
			$data->picture = $this->picture;
		}
		return $data;
	}
}
