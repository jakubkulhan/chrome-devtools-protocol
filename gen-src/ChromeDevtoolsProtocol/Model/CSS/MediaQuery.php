<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Media query descriptor.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MediaQuery implements \JsonSerializable
{
	/**
	 * Array of media query expressions.
	 *
	 * @var MediaQueryExpression[]
	 */
	public $expressions;

	/**
	 * Whether the media query condition is satisfied.
	 *
	 * @var bool
	 */
	public $active;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->expressions)) {
			$instance->expressions = [];
			foreach ($data->expressions as $item) {
				$instance->expressions[] = MediaQueryExpression::fromJson($item);
			}
		}
		if (isset($data->active)) {
			$instance->active = (bool)$data->active;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->expressions !== null) {
			$data->expressions = [];
			foreach ($this->expressions as $item) {
				$data->expressions[] = $item->jsonSerialize();
			}
		}
		if ($this->active !== null) {
			$data->active = $this->active;
		}
		return $data;
	}
}
