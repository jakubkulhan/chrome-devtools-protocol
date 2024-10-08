<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * DOM object counter data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DOMCounter implements \JsonSerializable
{
	/**
	 * Object name. Note: object names should be presumed volatile and clients should not expect the returned names to be consistent across runs.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Object count.
	 *
	 * @var int
	 */
	public $count;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->count)) {
			$instance->count = (int)$data->count;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->count !== null) {
			$data->count = $this->count;
		}
		return $data;
	}
}
