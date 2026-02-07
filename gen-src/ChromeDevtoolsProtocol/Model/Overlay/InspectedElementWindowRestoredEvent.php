<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Fired when user asks to restore the Inspected Element floating window.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectedElementWindowRestoredEvent implements \JsonSerializable
{
	/**
	 * Id of the node to restore the floating window for.
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
