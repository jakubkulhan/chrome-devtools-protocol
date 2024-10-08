<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Specificity: https://drafts.csswg.org/selectors/#specificity-rules
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Specificity implements \JsonSerializable
{
	/**
	 * The a component, which represents the number of ID selectors.
	 *
	 * @var int
	 */
	public $a;

	/**
	 * The b component, which represents the number of class selectors, attributes selectors, and pseudo-classes.
	 *
	 * @var int
	 */
	public $b;

	/**
	 * The c component, which represents the number of type selectors and pseudo-elements.
	 *
	 * @var int
	 */
	public $c;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->a)) {
			$instance->a = (int)$data->a;
		}
		if (isset($data->b)) {
			$instance->b = (int)$data->b;
		}
		if (isset($data->c)) {
			$instance->c = (int)$data->c;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->a !== null) {
			$data->a = $this->a;
		}
		if ($this->b !== null) {
			$data->b = $this->b;
		}
		if ($this->c !== null) {
			$data->c = $this->c;
		}
		return $data;
	}
}
