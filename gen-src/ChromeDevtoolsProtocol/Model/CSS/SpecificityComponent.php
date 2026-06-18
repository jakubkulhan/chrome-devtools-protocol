<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Contribution of an individual simple selector to specificity.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SpecificityComponent implements \JsonSerializable
{
	/**
	 * The simple selector text that contributes to specificity.
	 *
	 * @var string
	 */
	public $text;

	/**
	 * The a component contribution.
	 *
	 * @var int
	 */
	public $a;

	/**
	 * The b component contribution.
	 *
	 * @var int
	 */
	public $b;

	/**
	 * The c component contribution.
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
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
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
		if ($this->text !== null) {
			$data->text = $this->text;
		}
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
