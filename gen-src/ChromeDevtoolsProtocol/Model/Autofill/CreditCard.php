<?php

namespace ChromeDevtoolsProtocol\Model\Autofill;

/**
 * Named type Autofill.CreditCard.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreditCard implements \JsonSerializable
{
	/**
	 * 16-digit credit card number.
	 *
	 * @var string
	 */
	public $number;

	/**
	 * Name of the credit card owner.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * 2-digit expiry month.
	 *
	 * @var string
	 */
	public $expiryMonth;

	/**
	 * 4-digit expiry year.
	 *
	 * @var string
	 */
	public $expiryYear;

	/**
	 * 3-digit card verification code.
	 *
	 * @var string
	 */
	public $cvc;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->number)) {
			$instance->number = (string)$data->number;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->expiryMonth)) {
			$instance->expiryMonth = (string)$data->expiryMonth;
		}
		if (isset($data->expiryYear)) {
			$instance->expiryYear = (string)$data->expiryYear;
		}
		if (isset($data->cvc)) {
			$instance->cvc = (string)$data->cvc;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->number !== null) {
			$data->number = $this->number;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->expiryMonth !== null) {
			$data->expiryMonth = $this->expiryMonth;
		}
		if ($this->expiryYear !== null) {
			$data->expiryYear = $this->expiryYear;
		}
		if ($this->cvc !== null) {
			$data->cvc = $this->cvc;
		}
		return $data;
	}
}
