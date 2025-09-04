<?php

namespace ChromeDevtoolsProtocol\Model\Autofill;

/**
 * Request for Autofill.trigger command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TriggerRequest implements \JsonSerializable
{
	/**
	 * Identifies a field that serves as an anchor for autofill.
	 *
	 * @var int
	 */
	public $fieldId;

	/**
	 * Identifies the frame that field belongs to.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Credit card information to fill out the form. Credit card data is not saved. Mutually exclusive with `address`.
	 *
	 * @var CreditCard|null
	 */
	public $card;

	/**
	 * Address to fill out the form. Address data is not saved. Mutually exclusive with `card`.
	 *
	 * @var Address|null
	 */
	public $address;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->fieldId)) {
			$instance->fieldId = (int)$data->fieldId;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->card)) {
			$instance->card = CreditCard::fromJson($data->card);
		}
		if (isset($data->address)) {
			$instance->address = Address::fromJson($data->address);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->fieldId !== null) {
			$data->fieldId = $this->fieldId;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->card !== null) {
			$data->card = $this->card->jsonSerialize();
		}
		if ($this->address !== null) {
			$data->address = $this->address->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return TriggerRequestBuilder
	 */
	public static function builder(): TriggerRequestBuilder
	{
		return new TriggerRequestBuilder();
	}
}
