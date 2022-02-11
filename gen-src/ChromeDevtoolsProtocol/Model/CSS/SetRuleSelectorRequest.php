<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.setRuleSelector command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRuleSelectorRequest implements \JsonSerializable
{
	/** @var string */
	public $styleSheetId;

	/** @var SourceRange */
	public $range;

	/** @var string */
	public $selector;


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
		if (isset($data->selector)) {
			$instance->selector = (string)$data->selector;
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
		if ($this->selector !== null) {
			$data->selector = $this->selector;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetRuleSelectorRequestBuilder
	 */
	public static function builder(): SetRuleSelectorRequestBuilder
	{
		return new SetRuleSelectorRequestBuilder();
	}
}
