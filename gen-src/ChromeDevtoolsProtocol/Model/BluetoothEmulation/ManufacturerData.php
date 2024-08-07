<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Stores the manufacturer data
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ManufacturerData implements \JsonSerializable
{
	/**
	 * Company identifier https://bitbucket.org/bluetooth-SIG/public/src/main/assigned_numbers/company_identifiers/company_identifiers.yaml https://usb.org/developers
	 *
	 * @var int
	 */
	public $key;

	/**
	 * Manufacturer-specific data (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $data;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = (int)$data->key;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}
}
