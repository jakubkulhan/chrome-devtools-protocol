<?php

namespace ChromeDevtoolsProtocol\Model\Autofill;

/**
 * A list of address fields.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddressFields implements \JsonSerializable
{
	/** @var AddressField[] */
	public $fields;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->fields)) {
			$instance->fields = [];
			foreach ($data->fields as $item) {
				$instance->fields[] = AddressField::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->fields !== null) {
			$data->fields = [];
			foreach ($this->fields as $item) {
				$data->fields[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
