<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.setFileInputFiles command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetFileInputFilesRequest implements \JsonSerializable
{
	/**
	 * Array of file paths to set.
	 *
	 * @var string[]
	 */
	public $files;

	/**
	 * Identifier of the node.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Identifier of the backend node.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * JavaScript object id of the node wrapper.
	 *
	 * @var string
	 */
	public $objectId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->files)) {
			$instance->files = [];
			foreach ($data->files as $item) {
				$instance->files[] = (string)$item;
			}
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->files !== null) {
			$data->files = [];
			foreach ($this->files as $item) {
				$data->files[] = $item;
			}
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetFileInputFilesRequestBuilder
	 */
	public static function builder(): SetFileInputFilesRequestBuilder
	{
		return new SetFileInputFilesRequestBuilder();
	}
}
