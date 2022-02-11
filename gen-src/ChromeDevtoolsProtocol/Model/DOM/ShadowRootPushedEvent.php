<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Called when shadow root is pushed into the element.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ShadowRootPushedEvent implements \JsonSerializable
{
	/**
	 * Host element id.
	 *
	 * @var int
	 */
	public $hostId;

	/**
	 * Shadow root.
	 *
	 * @var Node
	 */
	public $root;


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
		if (isset($data->root)) {
			$instance->root = Node::fromJson($data->root);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->hostId !== null) {
			$data->hostId = $this->hostId;
		}
		if ($this->root !== null) {
			$data->root = $this->root->jsonSerialize();
		}
		return $data;
	}
}
