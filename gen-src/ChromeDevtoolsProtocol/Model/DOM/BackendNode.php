<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Backend node with a friendly name.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BackendNode implements \JsonSerializable
{
	/**
	 * `Node`'s nodeType.
	 *
	 * @var int
	 */
	public $nodeType;

	/**
	 * `Node`'s nodeName.
	 *
	 * @var string
	 */
	public $nodeName;

	/** @var int */
	public $backendNodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeType)) {
			$instance->nodeType = (int)$data->nodeType;
		}
		if (isset($data->nodeName)) {
			$instance->nodeName = (string)$data->nodeName;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeType !== null) {
			$data->nodeType = $this->nodeType;
		}
		if ($this->nodeName !== null) {
			$data->nodeName = $this->nodeName;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		return $data;
	}
}
