<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * A filter used by target query/discovery/auto-attach operations.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FilterEntry implements \JsonSerializable
{
	/**
	 * If set, causes exclusion of mathcing targets from the list.
	 *
	 * @var bool|null
	 */
	public $exclude;

	/**
	 * If not present, matches any type.
	 *
	 * @var string|null
	 */
	public $type;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->exclude)) {
			$instance->exclude = (bool)$data->exclude;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->exclude !== null) {
			$data->exclude = $this->exclude;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
