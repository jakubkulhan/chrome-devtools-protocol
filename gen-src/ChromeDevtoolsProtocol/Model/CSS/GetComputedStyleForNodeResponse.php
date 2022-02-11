<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getComputedStyleForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetComputedStyleForNodeResponse implements \JsonSerializable
{
	/**
	 * Computed style for the specified DOM node.
	 *
	 * @var CSSComputedStyleProperty[]
	 */
	public $computedStyle;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->computedStyle)) {
			$instance->computedStyle = [];
			foreach ($data->computedStyle as $item) {
				$instance->computedStyle[] = CSSComputedStyleProperty::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->computedStyle !== null) {
			$data->computedStyle = [];
			foreach ($this->computedStyle as $item) {
				$data->computedStyle[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
