<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Called when shadow root is popped from the element.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ShadowRootPoppedEvent implements \JsonSerializable
{
	/**
	 * Host element id.
	 *
	 * @var int
	 */
	public $hostId;

	/**
	 * Shadow root id.
	 *
	 * @var int
	 */
	public $rootId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->hostId)) {
			$instance->hostId = (int)$data->hostId;
		}
		if (isset($data->rootId)) {
			$instance->rootId = (int)$data->rootId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->hostId !== null) {
			$data->hostId = $this->hostId;
		}
		if ($this->rootId !== null) {
			$data->rootId = $this->rootId;
		}
		return $data;
	}
}
