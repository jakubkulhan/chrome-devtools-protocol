<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.InstallabilityErrorArgument.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InstallabilityErrorArgument implements \JsonSerializable
{
	/**
	 * Argument name (e.g. name:'minimum-icon-size-in-pixels').
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Argument value (e.g. value:'64').
	 *
	 * @var string
	 */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}
}
