<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that an existing BaseAudioContext will be destroyed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContextWillBeDestroyedEvent implements \JsonSerializable
{
	/** @var string */
	public $contextId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->contextId)) {
			$instance->contextId = (string)$data->contextId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		return $data;
	}
}
