<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.collectClassNamesFromSubtree command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CollectClassNamesFromSubtreeRequest implements \JsonSerializable
{
	/**
	 * Id of the node to collect class names.
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
	 * @return CollectClassNamesFromSubtreeRequestBuilder
	 */
	public static function builder(): CollectClassNamesFromSubtreeRequestBuilder
	{
		return new CollectClassNamesFromSubtreeRequestBuilder();
	}
}
