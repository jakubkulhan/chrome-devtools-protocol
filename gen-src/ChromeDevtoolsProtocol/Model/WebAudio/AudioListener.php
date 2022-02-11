<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Protocol object for AudioListener
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AudioListener implements \JsonSerializable
{
	/** @var string */
	public $listenerId;

	/** @var string */
	public $contextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->listenerId)) {
			$instance->listenerId = (string)$data->listenerId;
		}
		if (isset($data->contextId)) {
			$instance->contextId = (string)$data->contextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->listenerId !== null) {
			$data->listenerId = $this->listenerId;
		}
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		return $data;
	}
}
