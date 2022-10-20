<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;

/**
 * Fired when frame has been attached to its parent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameAttachedEvent implements \JsonSerializable
{
	/**
	 * Id of the frame that has been attached.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Parent frame identifier.
	 *
	 * @var string
	 */
	public $parentFrameId;

	/**
	 * JavaScript stack trace of when frame was attached, only set if frame initiated from script.
	 *
	 * @var StackTrace|null
	 */
	public $stack;


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
		if (isset($data->parentFrameId)) {
			$instance->parentFrameId = (string)$data->parentFrameId;
		}
		if (isset($data->stack)) {
			$instance->stack = StackTrace::fromJson($data->stack);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->parentFrameId !== null) {
			$data->parentFrameId = $this->parentFrameId;
		}
		if ($this->stack !== null) {
			$data->stack = $this->stack->jsonSerialize();
		}
		return $data;
	}
}
