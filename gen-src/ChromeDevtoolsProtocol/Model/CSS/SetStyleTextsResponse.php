<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setStyleTexts command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetStyleTextsResponse implements \JsonSerializable
{
	/**
	 * The resulting styles after modification.
	 *
	 * @var CSSStyle[]
	 */
	public $styles;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->styles)) {
			$instance->styles = [];
			foreach ($data->styles as $item) {
				$instance->styles[] = CSSStyle::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styles !== null) {
			$data->styles = [];
			foreach ($this->styles as $item) {
				$data->styles[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
