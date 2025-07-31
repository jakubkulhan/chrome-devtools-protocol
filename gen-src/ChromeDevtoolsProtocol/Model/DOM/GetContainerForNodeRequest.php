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

	/** @var string */
	public $physicalAxes;

	/** @var string */
	public $logicalAxes;

	/** @var bool|null */
	public $queriesScrollState;

	/** @var bool|null */
	public $queriesAnchored;


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
		if (isset($data->physicalAxes)) {
			$instance->physicalAxes = (string)$data->physicalAxes;
		}
		if (isset($data->logicalAxes)) {
			$instance->logicalAxes = (string)$data->logicalAxes;
		}
		if (isset($data->queriesScrollState)) {
			$instance->queriesScrollState = (bool)$data->queriesScrollState;
		}
		if (isset($data->queriesAnchored)) {
			$instance->queriesAnchored = (bool)$data->queriesAnchored;
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
		if ($this->physicalAxes !== null) {
			$data->physicalAxes = $this->physicalAxes;
		}
		if ($this->logicalAxes !== null) {
			$data->logicalAxes = $this->logicalAxes;
		}
		if ($this->queriesScrollState !== null) {
			$data->queriesScrollState = $this->queriesScrollState;
		}
		if ($this->queriesAnchored !== null) {
			$data->queriesAnchored = $this->queriesAnchored;
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
