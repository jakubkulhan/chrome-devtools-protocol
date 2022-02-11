<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getRelayoutBoundary command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRelayoutBoundaryRequest implements \JsonSerializable
{
	/**
	 * Id of the node.
	 *
	 * @var int
	 */
	public $nodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetRelayoutBoundaryRequestBuilder
	 */
	public static function builder(): GetRelayoutBoundaryRequestBuilder
	{
		return new GetRelayoutBoundaryRequestBuilder();
	}
}
