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
	 * A chain of inherited pseudo element styles (from the immediate node parent up to the DOM tree root).
	 *
	 * @var InheritedPseudoElementMatches[]|null
	 */
	public $inheritedPseudoElements;

	/**
	 * A list of CSS keyframed animations matching this node.
	 *
	 * @var CSSKeyframesRule[]|null
	 */
	public $cssKeyframesRules;

	/**
	 * A list of CSS position fallbacks matching this node.
	 *
	 * @var CSSPositionFallbackRule[]|null
	 */
	public $cssPositionFallbackRules;

	/**
	 * A list of CSS @position-try rules matching this node, based on the position-try-fallbacks property.
	 *
	 * @var CSSPositionTryRule[]|null
	 */
	public $cssPositionTryRules;

	/**
	 * A list of CSS at-property rules matching this node.
	 *
	 * @var CSSPropertyRule[]|null
	 */
	public $cssPropertyRules;

	/**
	 * A list of CSS property registrations matching this node.
	 *
	 * @var CSSPropertyRegistration[]|null
	 */
	public $cssPropertyRegistrations;

	/**
	 * A font-palette-values rule matching this node.
	 *
	 * @var CSSFontPaletteValuesRule|null
	 */
	public $cssFontPaletteValuesRule;

	/**
	 * Id of the first parent element that does not have display: contents.
	 *
	 * @var int
	 */
	public $parentLayoutNodeId;


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
		if (isset($data->inheritedPseudoElements)) {
			$instance->inheritedPseudoElements = [];
			foreach ($data->inheritedPseudoElements as $item) {
				$instance->inheritedPseudoElements[] = InheritedPseudoElementMatches::fromJson($item);
			}
		}
		if (isset($data->cssKeyframesRules)) {
			$instance->cssKeyframesRules = [];
			foreach ($data->cssKeyframesRules as $item) {
				$instance->cssKeyframesRules[] = CSSKeyframesRule::fromJson($item);
			}
		}
		if (isset($data->cssPositionFallbackRules)) {
			$instance->cssPositionFallbackRules = [];
			foreach ($data->cssPositionFallbackRules as $item) {
				$instance->cssPositionFallbackRules[] = CSSPositionFallbackRule::fromJson($item);
			}
		}
		if (isset($data->cssPositionTryRules)) {
			$instance->cssPositionTryRules = [];
			foreach ($data->cssPositionTryRules as $item) {
				$instance->cssPositionTryRules[] = CSSPositionTryRule::fromJson($item);
			}
		}
		if (isset($data->cssPropertyRules)) {
			$instance->cssPropertyRules = [];
			foreach ($data->cssPropertyRules as $item) {
				$instance->cssPropertyRules[] = CSSPropertyRule::fromJson($item);
			}
		}
		if (isset($data->cssPropertyRegistrations)) {
			$instance->cssPropertyRegistrations = [];
			foreach ($data->cssPropertyRegistrations as $item) {
				$instance->cssPropertyRegistrations[] = CSSPropertyRegistration::fromJson($item);
			}
		}
		if (isset($data->cssFontPaletteValuesRule)) {
			$instance->cssFontPaletteValuesRule = CSSFontPaletteValuesRule::fromJson($data->cssFontPaletteValuesRule);
		}
		if (isset($data->parentLayoutNodeId)) {
			$instance->parentLayoutNodeId = (int)$data->parentLayoutNodeId;
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
		if ($this->inheritedPseudoElements !== null) {
			$data->inheritedPseudoElements = [];
			foreach ($this->inheritedPseudoElements as $item) {
				$data->inheritedPseudoElements[] = $item->jsonSerialize();
			}
		}
		if ($this->cssKeyframesRules !== null) {
			$data->cssKeyframesRules = [];
			foreach ($this->cssKeyframesRules as $item) {
				$data->cssKeyframesRules[] = $item->jsonSerialize();
			}
		}
		if ($this->cssPositionFallbackRules !== null) {
			$data->cssPositionFallbackRules = [];
			foreach ($this->cssPositionFallbackRules as $item) {
				$data->cssPositionFallbackRules[] = $item->jsonSerialize();
			}
		}
		if ($this->cssPositionTryRules !== null) {
			$data->cssPositionTryRules = [];
			foreach ($this->cssPositionTryRules as $item) {
				$data->cssPositionTryRules[] = $item->jsonSerialize();
			}
		}
		if ($this->cssPropertyRules !== null) {
			$data->cssPropertyRules = [];
			foreach ($this->cssPropertyRules as $item) {
				$data->cssPropertyRules[] = $item->jsonSerialize();
			}
		}
		if ($this->cssPropertyRegistrations !== null) {
			$data->cssPropertyRegistrations = [];
			foreach ($this->cssPropertyRegistrations as $item) {
				$data->cssPropertyRegistrations[] = $item->jsonSerialize();
			}
		}
		if ($this->cssFontPaletteValuesRule !== null) {
			$data->cssFontPaletteValuesRule = $this->cssFontPaletteValuesRule->jsonSerialize();
		}
		if ($this->parentLayoutNodeId !== null) {
			$data->parentLayoutNodeId = $this->parentLayoutNodeId;
		}
		return $data;
	}
}
