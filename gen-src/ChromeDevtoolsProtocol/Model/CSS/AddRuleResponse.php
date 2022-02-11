<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.addRule command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddRuleResponse implements \JsonSerializable
{
	/**
	 * The newly created rule.
	 *
	 * @var CSSRule
	 */
	public $rule;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->rule !== null) {
			$data->rule = $this->rule->jsonSerialize();
		}
		return $data;
	}
}
