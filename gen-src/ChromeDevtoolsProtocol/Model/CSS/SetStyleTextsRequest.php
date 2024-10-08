<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.setStyleTexts command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetStyleTextsRequest implements \JsonSerializable
{
	/** @var StyleDeclarationEdit[] */
	public $edits;

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
		if (isset($data->edits)) {
			$instance->edits = [];
			foreach ($data->edits as $item) {
				$instance->edits[] = StyleDeclarationEdit::fromJson($item);
			}
		}
		if (isset($data->nodeForPropertySyntaxValidation)) {
			$instance->nodeForPropertySyntaxValidation = (int)$data->nodeForPropertySyntaxValidation;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->edits !== null) {
			$data->edits = [];
			foreach ($this->edits as $item) {
				$data->edits[] = $item->jsonSerialize();
			}
		}
		if ($this->nodeForPropertySyntaxValidation !== null) {
			$data->nodeForPropertySyntaxValidation = $this->nodeForPropertySyntaxValidation;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetStyleTextsRequestBuilder
	 */
	public static function builder(): SetStyleTextsRequestBuilder
	{
		return new SetStyleTextsRequestBuilder();
	}
}
