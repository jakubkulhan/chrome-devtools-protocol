<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Match data for a CSS rule.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RuleMatch implements \JsonSerializable
{
	/**
	 * CSS rule in the match.
	 *
	 * @var CSSRule
	 */
	public $rule;

	/**
	 * Matching selector indices in the rule's selectorList selectors (0-based).
	 *
	 * @var int[]
	 */
	public $matchingSelectors;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->rule)) {
			$instance->rule = CSSRule::fromJson($data->rule);
		}
		if (isset($data->matchingSelectors)) {
			$instance->matchingSelectors = [];
			foreach ($data->matchingSelectors as $item) {
				$instance->matchingSelectors[] = (int)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->rule !== null) {
			$data->rule = $this->rule->jsonSerialize();
		}
		if ($this->matchingSelectors !== null) {
			$data->matchingSelectors = [];
			foreach ($this->matchingSelectors as $item) {
				$data->matchingSelectors[] = $item;
			}
		}
		return $data;
	}
}
