<?php

namespace ChromeDevtoolsProtocol\Model\Autofill;

/**
 * Emitted when an address form is filled.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddressFormFilledEvent implements \JsonSerializable
{
	/**
	 * Information about the fields that were filled
	 *
	 * @var FilledField[]
	 */
	public $filledFields;

	/**
	 * An UI representation of the address used to fill the form. Consists of a 2D array where each child represents an address/profile line.
	 *
	 * @var AddressUI
	 */
	public $addressUi;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->filledFields)) {
			$instance->filledFields = [];
			foreach ($data->filledFields as $item) {
				$instance->filledFields[] = FilledField::fromJson($item);
			}
		}
		if (isset($data->addressUi)) {
			$instance->addressUi = AddressUI::fromJson($data->addressUi);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->filledFields !== null) {
			$data->filledFields = [];
			foreach ($this->filledFields as $item) {
				$data->filledFields[] = $item->jsonSerialize();
			}
		}
		if ($this->addressUi !== null) {
			$data->addressUi = $this->addressUi->jsonSerialize();
		}
		return $data;
	}
}
