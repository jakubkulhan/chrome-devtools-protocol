<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.LowTextContrastIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LowTextContrastIssueDetails implements \JsonSerializable
{
	/** @var int */
	public $violatingNodeId;

	/** @var string */
	public $violatingNodeSelector;

	/** @var int|float */
	public $contrastRatio;

	/** @var int|float */
	public $thresholdAA;

	/** @var int|float */
	public $thresholdAAA;

	/** @var string */
	public $fontSize;

	/** @var string */
	public $fontWeight;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->violatingNodeId)) {
			$instance->violatingNodeId = (int)$data->violatingNodeId;
		}
		if (isset($data->violatingNodeSelector)) {
			$instance->violatingNodeSelector = (string)$data->violatingNodeSelector;
		}
		if (isset($data->contrastRatio)) {
			$instance->contrastRatio = $data->contrastRatio;
		}
		if (isset($data->thresholdAA)) {
			$instance->thresholdAA = $data->thresholdAA;
		}
		if (isset($data->thresholdAAA)) {
			$instance->thresholdAAA = $data->thresholdAAA;
		}
		if (isset($data->fontSize)) {
			$instance->fontSize = (string)$data->fontSize;
		}
		if (isset($data->fontWeight)) {
			$instance->fontWeight = (string)$data->fontWeight;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->violatingNodeId !== null) {
			$data->violatingNodeId = $this->violatingNodeId;
		}
		if ($this->violatingNodeSelector !== null) {
			$data->violatingNodeSelector = $this->violatingNodeSelector;
		}
		if ($this->contrastRatio !== null) {
			$data->contrastRatio = $this->contrastRatio;
		}
		if ($this->thresholdAA !== null) {
			$data->thresholdAA = $this->thresholdAA;
		}
		if ($this->thresholdAAA !== null) {
			$data->thresholdAAA = $this->thresholdAAA;
		}
		if ($this->fontSize !== null) {
			$data->fontSize = $this->fontSize;
		}
		if ($this->fontWeight !== null) {
			$data->fontWeight = $this->fontWeight;
		}
		return $data;
	}
}
