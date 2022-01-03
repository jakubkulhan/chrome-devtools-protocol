<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getMatchedStylesForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetMatchedStylesForNodeResponse implements \JsonSerializable
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
	 * CSS rules matching this node, from all applicable stylesheets.
	 *
	 * @var RuleMatch[]|null
	 */
	public $matchedCSSRules;

	/**
	 * Pseudo style matches for this node.
	 *
	 * @var PseudoElementMatches[]|null
	 */
	public $pseudoElements;

	/**
	 * A chain of inherited styles (from the immediate node parent up to the DOM tree root).
	 *
	 * @var InheritedStyleEntry[]|null
	 */
	public $inherited;

	/**
	 * A list of CSS keyframed animations matching this node.
	 *
	 * @var CSSKeyframesRule[]|null
	 */
	public $cssKeyframesRules;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->inlineStyle)) {
			$instance->inlineStyle = CSSStyle::fromJson($data->inlineStyle);
		}
		if (isset($data->attributesStyle)) {
			$instance->attributesStyle = CSSStyle::fromJson($data->attributesStyle);
		}
		if (isset($data->matchedCSSRules)) {
			$instance->matchedCSSRules = [];
			foreach ($data->matchedCSSRules as $item) {
				$instance->matchedCSSRules[] = RuleMatch::fromJson($item);
			}
		}
		if (isset($data->pseudoElements)) {
			$instance->pseudoElements = [];
			foreach ($data->pseudoElements as $item) {
				$instance->pseudoElements[] = PseudoElementMatches::fromJson($item);
			}
		}
		if (isset($data->inherited)) {
			$instance->inherited = [];
			foreach ($data->inherited as $item) {
				$instance->inherited[] = InheritedStyleEntry::fromJson($item);
			}
		}
		if (isset($data->cssKeyframesRules)) {
			$instance->cssKeyframesRules = [];
			foreach ($data->cssKeyframesRules as $item) {
				$instance->cssKeyframesRules[] = CSSKeyframesRule::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->inlineStyle !== null) {
			$data->inlineStyle = $this->inlineStyle->jsonSerialize();
		}
		if ($this->attributesStyle !== null) {
			$data->attributesStyle = $this->attributesStyle->jsonSerialize();
		}
		if ($this->matchedCSSRules !== null) {
			$data->matchedCSSRules = [];
			foreach ($this->matchedCSSRules as $item) {
				$data->matchedCSSRules[] = $item->jsonSerialize();
			}
		}
		if ($this->pseudoElements !== null) {
			$data->pseudoElements = [];
			foreach ($this->pseudoElements as $item) {
				$data->pseudoElements[] = $item->jsonSerialize();
			}
		}
		if ($this->inherited !== null) {
			$data->inherited = [];
			foreach ($this->inherited as $item) {
				$data->inherited[] = $item->jsonSerialize();
			}
		}
		if ($this->cssKeyframesRules !== null) {
			$data->cssKeyframesRules = [];
			foreach ($this->cssKeyframesRules as $item) {
				$data->cssKeyframesRules[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
