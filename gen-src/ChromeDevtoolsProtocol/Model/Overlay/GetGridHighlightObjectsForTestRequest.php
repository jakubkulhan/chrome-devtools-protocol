<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.getGridHighlightObjectsForTest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetGridHighlightObjectsForTestRequest implements \JsonSerializable
{
	/**
	 * Ids of the node to get highlight object for.
	 *
	 * @var int[]
	 */
	public $nodeIds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeIds)) {
			$instance->nodeIds = [];
		if (isset($data->nodeIds)) {
			$instance->nodeIds = [];
			foreach ($data->nodeIds as $item) {
				$instance->nodeIds[] = (int)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeIds !== null) {
			$data->nodeIds = [];
		if ($this->nodeIds !== null) {
			$data->nodeIds = [];
			foreach ($this->nodeIds as $item) {
				$data->nodeIds[] = $item;
			}
		}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetGridHighlightObjectsForTestRequestBuilder
	 */
	public static function builder(): GetGridHighlightObjectsForTestRequestBuilder
	{
		return new GetGridHighlightObjectsForTestRequestBuilder();
	}
}
