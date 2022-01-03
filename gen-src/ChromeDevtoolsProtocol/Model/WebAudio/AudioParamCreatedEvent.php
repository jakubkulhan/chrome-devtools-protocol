<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that a new AudioParam has been created.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AudioParamCreatedEvent implements \JsonSerializable
{
	/** @var AudioParam */
	public $param;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->param)) {
			$instance->param = AudioParam::fromJson($data->param);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->param !== null) {
			$data->param = $this->param->jsonSerialize();
		}
		return $data;
	}
}
