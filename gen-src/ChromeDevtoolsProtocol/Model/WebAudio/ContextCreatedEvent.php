<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that a new BaseAudioContext has been created.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContextCreatedEvent implements \JsonSerializable
{
	/** @var BaseAudioContext */
	public $context;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->context)) {
			$instance->context = BaseAudioContext::fromJson($data->context);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->context !== null) {
			$data->context = $this->context->jsonSerialize();
		}
		return $data;
	}
}
