<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.pushNodesByBackendIdsToFrontend command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PushNodesByBackendIdsToFrontendRequest implements \JsonSerializable
{
	/**
	 * The array of backend node ids.
	 *
	 * @var int[]
	 */
	public $backendNodeIds;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->backendNodeIds)) {
			$instance->backendNodeIds = [];
		if (isset($data->backendNodeIds)) {
			$instance->backendNodeIds = [];
			foreach ($data->backendNodeIds as $item) {
				$instance->backendNodeIds[] = (int)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->backendNodeIds !== null) {
			$data->backendNodeIds = [];
		if ($this->backendNodeIds !== null) {
			$data->backendNodeIds = [];
			foreach ($this->backendNodeIds as $item) {
				$data->backendNodeIds[] = $item;
			}
		}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return PushNodesByBackendIdsToFrontendRequestBuilder
	 */
	public static function builder(): PushNodesByBackendIdsToFrontendRequestBuilder
	{
		return new PushNodesByBackendIdsToFrontendRequestBuilder();
	}
}
