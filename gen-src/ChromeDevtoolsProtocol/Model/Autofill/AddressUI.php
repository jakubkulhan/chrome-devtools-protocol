<?php

namespace ChromeDevtoolsProtocol\Model\Autofill;

/**
 * Defines how an address can be displayed like in chrome://settings/addresses. Address UI is a two dimensional array, each inner array is an "address information line", and when rendered in a UI surface should be displayed as such. The following address UI for instance: [[{name: "GIVE_NAME", value: "Jon"}, {name: "FAMILY_NAME", value: "Doe"}], [{name: "CITY", value: "Munich"}, {name: "ZIP", value: "81456"}]] should allow the receiver to render: Jon Doe Munich 81456
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddressUI implements \JsonSerializable
{
	/**
	 * A two dimension array containing the repesentation of values from an address profile.
	 *
	 * @var AddressFields[]
	 */
	public $addressFields;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->addressFields)) {
			$instance->addressFields = [];
			foreach ($data->addressFields as $item) {
				$instance->addressFields[] = AddressFields::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->addressFields !== null) {
			$data->addressFields = [];
			foreach ($this->addressFields as $item) {
				$data->addressFields[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
