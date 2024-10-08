<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue warns about errors in property rules that lead to property registrations being ignored.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PropertyRuleIssueDetails implements \JsonSerializable
{
	/**
	 * Source code position of the property rule.
	 *
	 * @var SourceCodeLocation
	 */
	public $sourceCodeLocation;

	/**
	 * Reason why the property rule was discarded.
	 *
	 * @var string
	 */
	public $propertyRuleIssueReason;

	/**
	 * The value of the property rule property that failed to parse
	 *
	 * @var string|null
	 */
	public $propertyValue;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sourceCodeLocation)) {
			$instance->sourceCodeLocation = SourceCodeLocation::fromJson($data->sourceCodeLocation);
		}
		if (isset($data->propertyRuleIssueReason)) {
			$instance->propertyRuleIssueReason = (string)$data->propertyRuleIssueReason;
		}
		if (isset($data->propertyValue)) {
			$instance->propertyValue = (string)$data->propertyValue;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sourceCodeLocation !== null) {
			$data->sourceCodeLocation = $this->sourceCodeLocation->jsonSerialize();
		}
		if ($this->propertyRuleIssueReason !== null) {
			$data->propertyRuleIssueReason = $this->propertyRuleIssueReason;
		}
		if ($this->propertyValue !== null) {
			$data->propertyValue = $this->propertyValue;
		}
		return $data;
	}
}
