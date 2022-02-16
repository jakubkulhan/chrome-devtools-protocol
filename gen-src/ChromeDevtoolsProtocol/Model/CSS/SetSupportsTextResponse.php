<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setSupportsText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSupportsTextResponse implements \JsonSerializable
{
	/**
	 * The resulting CSS Supports rule after modification.
	 *
	 * @var CSSSupports
	 */
	public $supports;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->supports)) {
			$instance->supports = CSSSupports::fromJson($data->supports);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->supports !== null) {
			$data->supports = $this->supports->jsonSerialize();
		}
		return $data;
	}
}
