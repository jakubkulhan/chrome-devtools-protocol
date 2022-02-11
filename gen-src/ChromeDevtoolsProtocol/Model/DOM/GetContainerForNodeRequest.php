<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getContainerForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetContainerForNodeRequest implements \JsonSerializable
{
	/** @var int */
	public $nodeId;

	/** @var string|null */
	public $containerName;


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
		if (isset($data->containerName)) {
			$instance->containerName = (string)$data->containerName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->containerName !== null) {
			$data->containerName = $this->containerName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetContainerForNodeRequestBuilder
	 */
	public static function builder(): GetContainerForNodeRequestBuilder
	{
		return new GetContainerForNodeRequestBuilder();
	}
}
