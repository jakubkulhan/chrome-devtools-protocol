<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS function conditional block representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSFunctionConditionNode implements \JsonSerializable
{
	/**
	 * Media query for this conditional block. Only one type of condition should be set.
	 *
	 * @var CSSMedia|null
	 */
	public $media;

	/**
	 * Container query for this conditional block. Only one type of condition should be set.
	 *
	 * @var CSSContainerQuery|null
	 */
	public $containerQueries;

	/**
	 * @supports CSS at-rule condition. Only one type of condition should be set.
	 *
	 * @var CSSSupports|null
	 */
	public $supports;

	/**
	 * Block body.
	 *
	 * @var CSSFunctionNode[]
	 */
	public $children;

	/**
	 * The condition text.
	 *
	 * @var string
	 */
	public $conditionText;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->media)) {
			$instance->media = CSSMedia::fromJson($data->media);
		}
		if (isset($data->containerQueries)) {
			$instance->containerQueries = CSSContainerQuery::fromJson($data->containerQueries);
		}
		if (isset($data->supports)) {
			$instance->supports = CSSSupports::fromJson($data->supports);
		}
		if (isset($data->children)) {
			$instance->children = [];
			foreach ($data->children as $item) {
				$instance->children[] = CSSFunctionNode::fromJson($item);
			}
		}
		if (isset($data->conditionText)) {
			$instance->conditionText = (string)$data->conditionText;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->media !== null) {
			$data->media = $this->media->jsonSerialize();
		}
		if ($this->containerQueries !== null) {
			$data->containerQueries = $this->containerQueries->jsonSerialize();
		}
		if ($this->supports !== null) {
			$data->supports = $this->supports->jsonSerialize();
		}
		if ($this->children !== null) {
			$data->children = [];
			foreach ($this->children as $item) {
				$data->children[] = $item->jsonSerialize();
			}
		}
		if ($this->conditionText !== null) {
			$data->conditionText = $this->conditionText;
		}
		return $data;
	}
}
