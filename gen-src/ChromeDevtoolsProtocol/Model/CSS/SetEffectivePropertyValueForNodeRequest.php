<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.setEffectivePropertyValueForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEffectivePropertyValueForNodeRequest implements \JsonSerializable
{
	/**
	 * The element id for which to set property.
	 *
	 * @var int
	 */
	public $nodeId;

	/** @var string */
	public $propertyName;

	/** @var string */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->propertyName)) {
			$instance->propertyName = (string)$data->propertyName;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->propertyName !== null) {
			$data->propertyName = $this->propertyName;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetEffectivePropertyValueForNodeRequestBuilder
	 */
	public static function builder(): SetEffectivePropertyValueForNodeRequestBuilder
	{
		return new SetEffectivePropertyValueForNodeRequestBuilder();
	}
}
