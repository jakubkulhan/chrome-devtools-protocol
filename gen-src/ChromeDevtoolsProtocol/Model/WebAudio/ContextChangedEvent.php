<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that existing BaseAudioContext has changed some properties (id stays the same)..
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContextChangedEvent implements \JsonSerializable
{
	/** @var BaseAudioContext */
	public $context;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->context)) {
			$instance->context = BaseAudioContext::fromJson($data->context);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->context !== null) {
			$data->context = $this->context->jsonSerialize();
		}
		return $data;
	}
}
