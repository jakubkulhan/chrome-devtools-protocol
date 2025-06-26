<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue warns about errors in the select or summary element content model.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ElementAccessibilityIssueDetails implements \JsonSerializable
{
	/** @var int */
	public $nodeId;

	/** @var string */
	public $elementAccessibilityIssueReason;

	/** @var bool */
	public $hasDisallowedAttributes;


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
		if (isset($data->elementAccessibilityIssueReason)) {
			$instance->elementAccessibilityIssueReason = (string)$data->elementAccessibilityIssueReason;
		}
		if (isset($data->hasDisallowedAttributes)) {
			$instance->hasDisallowedAttributes = (bool)$data->hasDisallowedAttributes;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->elementAccessibilityIssueReason !== null) {
			$data->elementAccessibilityIssueReason = $this->elementAccessibilityIssueReason;
		}
		if ($this->hasDisallowedAttributes !== null) {
			$data->hasDisallowedAttributes = $this->hasDisallowedAttributes;
		}
		return $data;
	}
}
