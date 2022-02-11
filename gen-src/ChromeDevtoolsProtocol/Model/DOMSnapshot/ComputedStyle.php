<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * A subset of the full ComputedStyle as defined by the request whitelist.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ComputedStyle implements \JsonSerializable
{
	/**
	 * Name/value pairs of computed style properties.
	 *
	 * @var NameValue[]
	 */
	public $properties;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->properties)) {
			$instance->properties = [];
			foreach ($data->properties as $item) {
				$instance->properties[] = NameValue::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->properties !== null) {
			$data->properties = [];
			foreach ($this->properties as $item) {
				$data->properties[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
