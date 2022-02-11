<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Fired when the node should be inspected. This happens after call to `setInspectMode` or when user manually inspects an element.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectNodeRequestedEvent implements \JsonSerializable
{
	/**
	 * Id of the node to inspect.
	 *
	 * @var int
	 */
	public $backendNodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		return $data;
	}
}
