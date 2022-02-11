<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getAttributes command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAttributesResponse implements \JsonSerializable
{
	/**
	 * An interleaved array of node attribute names and values.
	 *
	 * @var string[]
	 */
	public $attributes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->attributes)) {
			$instance->attributes = [];
			foreach ($data->attributes as $item) {
				$instance->attributes[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->attributes !== null) {
			$data->attributes = [];
			foreach ($this->attributes as $item) {
				$data->attributes[] = $item;
			}
		}
		return $data;
	}
}
