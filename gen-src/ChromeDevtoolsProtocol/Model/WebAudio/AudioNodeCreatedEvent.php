<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that a new AudioNode has been created.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AudioNodeCreatedEvent implements \JsonSerializable
{
	/** @var AudioNode */
	public $node;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->node)) {
			$instance->node = AudioNode::fromJson($data->node);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->node !== null) {
			$data->node = $this->node->jsonSerialize();
		}
		return $data;
	}
}
