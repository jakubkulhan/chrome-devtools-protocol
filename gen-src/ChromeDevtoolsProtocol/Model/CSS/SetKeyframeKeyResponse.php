<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setKeyframeKey command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetKeyframeKeyResponse implements \JsonSerializable
{
	/**
	 * The resulting key text after modification.
	 *
	 * @var Value
	 */
	public $keyText;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->keyText)) {
			$instance->keyText = Value::fromJson($data->keyText);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->keyText !== null) {
			$data->keyText = $this->keyText->jsonSerialize();
		}
		return $data;
	}
}
