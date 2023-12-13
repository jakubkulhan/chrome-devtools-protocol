<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.addRule command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddRuleRequest implements \JsonSerializable
{
	/**
	 * The css style sheet identifier where a new rule should be inserted.
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * The text of a new rule.
	 *
	 * @var string
	 */
	public $ruleText;

	/**
	 * Text position of a new rule in the target style sheet.
	 *
	 * @var SourceRange
	 */
	public $location;

	/**
	 * NodeId for the DOM node in whose context custom property declarations for registered properties should be validated. If omitted, declarations in the new rule text can only be validated statically, which may produce incorrect results if the declaration contains a var() for example.
	 *
	 * @var int
	 */
	public $nodeForPropertySyntaxValidation;


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
		if (isset($data->ruleText)) {
			$instance->ruleText = (string)$data->ruleText;
		}
		if (isset($data->location)) {
			$instance->location = SourceRange::fromJson($data->location);
		}
		if (isset($data->nodeForPropertySyntaxValidation)) {
			$instance->nodeForPropertySyntaxValidation = (int)$data->nodeForPropertySyntaxValidation;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->ruleText !== null) {
			$data->ruleText = $this->ruleText;
		}
		if ($this->location !== null) {
			$data->location = $this->location->jsonSerialize();
		}
		if ($this->nodeForPropertySyntaxValidation !== null) {
			$data->nodeForPropertySyntaxValidation = $this->nodeForPropertySyntaxValidation;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddRuleRequestBuilder
	 */
	public static function builder(): AddRuleRequestBuilder
	{
		return new AddRuleRequestBuilder();
	}
}
