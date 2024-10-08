<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Inherited CSS rule collection from ancestor node.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InheritedStyleEntry implements \JsonSerializable
{
	/**
	 * The ancestor node's inline style, if any, in the style inheritance chain.
	 *
	 * @var CSSStyle|null
	 */
	public $inlineStyle;

	/**
	 * Matches of CSS rules matching the ancestor node in the style inheritance chain.
	 *
	 * @var RuleMatch[]
	 */
	public $matchedCSSRules;


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
		if (isset($data->matchedCSSRules)) {
			$instance->matchedCSSRules = [];
			foreach ($data->matchedCSSRules as $item) {
				$instance->matchedCSSRules[] = RuleMatch::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->inlineStyle !== null) {
			$data->inlineStyle = $this->inlineStyle->jsonSerialize();
		}
		if ($this->matchedCSSRules !== null) {
			$data->matchedCSSRules = [];
			foreach ($this->matchedCSSRules as $item) {
				$data->matchedCSSRules[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
