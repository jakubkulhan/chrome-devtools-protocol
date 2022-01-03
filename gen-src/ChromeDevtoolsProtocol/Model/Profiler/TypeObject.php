<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Describes a type collected during runtime.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TypeObject implements \JsonSerializable
{
	/**
	 * Name of a type collected with type profiling.
	 *
	 * @var string
	 */
	public $name;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		return $data;
	}
}
