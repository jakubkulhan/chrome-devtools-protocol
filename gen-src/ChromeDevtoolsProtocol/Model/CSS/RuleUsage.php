<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS coverage information.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RuleUsage implements \JsonSerializable
{
	/**
	 * The css style sheet identifier (absent for user agent stylesheet and user-specified stylesheet rules) this rule came from.
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * Offset of the start of the rule (including selector) from the beginning of the stylesheet.
	 *
	 * @var int|float
	 */
	public $startOffset;

	/**
	 * Offset of the end of the rule body from the beginning of the stylesheet.
	 *
	 * @var int|float
	 */
	public $endOffset;

	/**
	 * Indicates whether the rule was actually used by some element in the page.
	 *
	 * @var bool
	 */
	public $used;


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
		if (isset($data->startOffset)) {
			$instance->startOffset = $data->startOffset;
		}
		if (isset($data->endOffset)) {
			$instance->endOffset = $data->endOffset;
		}
		if (isset($data->used)) {
			$instance->used = (bool)$data->used;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->startOffset !== null) {
			$data->startOffset = $this->startOffset;
		}
		if ($this->endOffset !== null) {
			$data->endOffset = $this->endOffset;
		}
		if ($this->used !== null) {
			$data->used = $this->used;
		}
		return $data;
	}
}
