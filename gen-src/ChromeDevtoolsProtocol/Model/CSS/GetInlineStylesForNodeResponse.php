<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getInlineStylesForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetInlineStylesForNodeResponse implements \JsonSerializable
{
	/**
	 * Inline style for the specified DOM node.
	 *
	 * @var CSSStyle|null
	 */
	public $inlineStyle;

	/**
	 * Attribute-defined element style (e.g. resulting from "width=20 height=100%").
	 *
	 * @var CSSStyle|null
	 */
	public $attributesStyle;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->inlineStyle)) {
			$instance->inlineStyle = CSSStyle::fromJson($data->inlineStyle);
		}
		if (isset($data->attributesStyle)) {
			$instance->attributesStyle = CSSStyle::fromJson($data->attributesStyle);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->inlineStyle !== null) {
			$data->inlineStyle = $this->inlineStyle->jsonSerialize();
		}
		if ($this->attributesStyle !== null) {
			$data->attributesStyle = $this->attributesStyle->jsonSerialize();
		}
		return $data;
	}
}
