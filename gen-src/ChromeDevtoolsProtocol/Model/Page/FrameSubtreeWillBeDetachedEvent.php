<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired before frame subtree is detached. Emitted before any frame of the subtree is actually detached.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameSubtreeWillBeDetachedEvent implements \JsonSerializable
{
	/**
	 * Id of the frame that is the root of the subtree that will be detached.
	 *
	 * @var string
	 */
	public $frameId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}
}
