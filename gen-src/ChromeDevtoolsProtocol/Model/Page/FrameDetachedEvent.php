<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when frame has been detached from its parent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameDetachedEvent implements \JsonSerializable
{
	/**
	 * Id of the frame that has been detached.
	 *
	 * @var string
	 */
	public $frameId;

	/** @var string */
	public $reason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		return $data;
	}
}
