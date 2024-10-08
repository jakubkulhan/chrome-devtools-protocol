<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Response to Runtime.getProperties command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPropertiesResponse implements \JsonSerializable
{
	/**
	 * Object properties.
	 *
	 * @var PropertyDescriptor[]
	 */
	public $result;

	/**
	 * Internal object properties (only of the element itself).
	 *
	 * @var InternalPropertyDescriptor[]|null
	 */
	public $internalProperties;

	/**
	 * Object private properties.
	 *
	 * @var PrivatePropertyDescriptor[]|null
	 */
	public $privateProperties;

	/**
	 * Exception details.
	 *
	 * @var ExceptionDetails|null
	 */
	public $exceptionDetails;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->result)) {
			$instance->result = [];
			foreach ($data->result as $item) {
				$instance->result[] = PropertyDescriptor::fromJson($item);
			}
		}
		if (isset($data->internalProperties)) {
			$instance->internalProperties = [];
			foreach ($data->internalProperties as $item) {
				$instance->internalProperties[] = InternalPropertyDescriptor::fromJson($item);
			}
		}
		if (isset($data->privateProperties)) {
			$instance->privateProperties = [];
			foreach ($data->privateProperties as $item) {
				$instance->privateProperties[] = PrivatePropertyDescriptor::fromJson($item);
			}
		}
		if (isset($data->exceptionDetails)) {
			$instance->exceptionDetails = ExceptionDetails::fromJson($data->exceptionDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->result !== null) {
			$data->result = [];
			foreach ($this->result as $item) {
				$data->result[] = $item->jsonSerialize();
			}
		}
		if ($this->internalProperties !== null) {
			$data->internalProperties = [];
			foreach ($this->internalProperties as $item) {
				$data->internalProperties[] = $item->jsonSerialize();
			}
		}
		if ($this->privateProperties !== null) {
			$data->privateProperties = [];
			foreach ($this->privateProperties as $item) {
				$data->privateProperties[] = $item->jsonSerialize();
			}
		}
		if ($this->exceptionDetails !== null) {
			$data->exceptionDetails = $this->exceptionDetails->jsonSerialize();
		}
		return $data;
	}
}
