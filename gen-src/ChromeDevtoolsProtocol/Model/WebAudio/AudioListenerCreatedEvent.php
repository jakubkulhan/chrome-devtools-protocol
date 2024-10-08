<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that the construction of an AudioListener has finished.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AudioListenerCreatedEvent implements \JsonSerializable
{
	/** @var AudioListener */
	public $listener;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->listener)) {
			$instance->listener = AudioListener::fromJson($data->listener);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->listener !== null) {
			$data->listener = $this->listener->jsonSerialize();
		}
		return $data;
	}
}
