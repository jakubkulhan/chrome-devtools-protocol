<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that a new AudioListener has been created.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AudioListenerWillBeDestroyedEvent implements \JsonSerializable
{
	/** @var string */
	public $contextId;

	/** @var string */
	public $listenerId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->contextId)) {
			$instance->contextId = (string)$data->contextId;
		}
		if (isset($data->listenerId)) {
			$instance->listenerId = (string)$data->listenerId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		if ($this->listenerId !== null) {
			$data->listenerId = $this->listenerId;
		}
		return $data;
	}
}
