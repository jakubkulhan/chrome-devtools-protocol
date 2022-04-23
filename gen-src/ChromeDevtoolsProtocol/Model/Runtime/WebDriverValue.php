<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Represents the value serialiazed by the WebDriver BiDi specification https://w3c.github.io/webdriver-bidi.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebDriverValue implements \JsonSerializable
{
	/** @var string */
	public $type;

	/** @var mixed|null */
	public $value;

	/** @var string|null */
	public $objectId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->value)) {
			$instance->value = $data->value;
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		return $data;
	}
}
