<?php

namespace ChromeDevtoolsProtocol\Model\Autofill;

/**
 * Request for Autofill.setAddresses command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAddressesRequest implements \JsonSerializable
{
	/** @var Address[] */
	public $addresses;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->addresses)) {
			$instance->addresses = [];
			foreach ($data->addresses as $item) {
				$instance->addresses[] = Address::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->addresses !== null) {
			$data->addresses = [];
			foreach ($this->addresses as $item) {
				$data->addresses[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAddressesRequestBuilder
	 */
	public static function builder(): SetAddressesRequestBuilder
	{
		return new SetAddressesRequestBuilder();
	}
}
