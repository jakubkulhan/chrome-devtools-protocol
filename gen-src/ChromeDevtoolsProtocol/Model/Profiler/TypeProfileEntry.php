<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Source offset and types for a parameter or return value.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TypeProfileEntry implements \JsonSerializable
{
	/**
	 * Source offset of the parameter or end of function for return values.
	 *
	 * @var int
	 */
	public $offset;

	/**
	 * The types for this parameter or return value.
	 *
	 * @var TypeObject[]
	 */
	public $types;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->offset)) {
			$instance->offset = (int)$data->offset;
		}
		if (isset($data->types)) {
			$instance->types = [];
			foreach ($data->types as $item) {
				$instance->types[] = TypeObject::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->offset !== null) {
			$data->offset = $this->offset;
		}
		if ($this->types !== null) {
			$data->types = [];
			foreach ($this->types as $item) {
				$data->types[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
