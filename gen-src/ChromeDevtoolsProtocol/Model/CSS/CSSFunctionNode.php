<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Section of the body of a CSS function rule.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSFunctionNode implements \JsonSerializable
{
	/**
	 * A conditional block. If set, style should not be set.
	 *
	 * @var CSSFunctionConditionNode|null
	 */
	public $condition;

	/**
	 * Values set by this node. If set, condition should not be set.
	 *
	 * @var CSSStyle|null
	 */
	public $style;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->condition)) {
			$instance->condition = CSSFunctionConditionNode::fromJson($data->condition);
		}
		if (isset($data->style)) {
			$instance->style = CSSStyle::fromJson($data->style);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->condition !== null) {
			$data->condition = $this->condition->jsonSerialize();
		}
		if ($this->style !== null) {
			$data->style = $this->style->jsonSerialize();
		}
		return $data;
	}
}
