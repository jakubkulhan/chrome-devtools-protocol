<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS function at-rule representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSFunctionRule implements \JsonSerializable
{
	/**
	 * Name of the function.
	 *
	 * @var Value
	 */
	public $name;

	/**
	 * The css style sheet identifier (absent for user agent stylesheet and user-specified stylesheet rules) this rule came from.
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * Parent stylesheet's origin.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * List of parameters.
	 *
	 * @var CSSFunctionParameter[]
	 */
	public $parameters;

	/**
	 * Function body.
	 *
	 * @var CSSFunctionNode[]
	 */
	public $children;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = Value::fromJson($data->name);
		}
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->parameters)) {
			$instance->parameters = [];
			foreach ($data->parameters as $item) {
				$instance->parameters[] = CSSFunctionParameter::fromJson($item);
			}
		}
		if (isset($data->children)) {
			$instance->children = [];
			foreach ($data->children as $item) {
				$instance->children[] = CSSFunctionNode::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name->jsonSerialize();
		}
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->parameters !== null) {
			$data->parameters = [];
			foreach ($this->parameters as $item) {
				$data->parameters[] = $item->jsonSerialize();
			}
		}
		if ($this->children !== null) {
			$data->children = [];
			foreach ($this->children as $item) {
				$data->children[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
