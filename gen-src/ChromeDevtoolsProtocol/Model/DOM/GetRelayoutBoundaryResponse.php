<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getRelayoutBoundary command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRelayoutBoundaryResponse implements \JsonSerializable
{
	/**
	 * Relayout boundary node id for the given node.
	 *
	 * @var int
	 */
	public $nodeId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
