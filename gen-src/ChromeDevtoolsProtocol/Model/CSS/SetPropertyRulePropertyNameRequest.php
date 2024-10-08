<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.setPropertyRulePropertyName command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPropertyRulePropertyNameRequest implements \JsonSerializable
{
	/** @var string */
	public $styleSheetId;

	/** @var SourceRange */
	public $range;

	/** @var string */
	public $propertyName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		if (isset($data->range)) {
			$instance->range = SourceRange::fromJson($data->range);
		}
		if (isset($data->propertyName)) {
			$instance->propertyName = (string)$data->propertyName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->range !== null) {
			$data->range = $this->range->jsonSerialize();
		}
		if ($this->propertyName !== null) {
			$data->propertyName = $this->propertyName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPropertyRulePropertyNameRequestBuilder
	 */
	public static function builder(): SetPropertyRulePropertyNameRequestBuilder
	{
		return new SetPropertyRulePropertyNameRequestBuilder();
	}
}
