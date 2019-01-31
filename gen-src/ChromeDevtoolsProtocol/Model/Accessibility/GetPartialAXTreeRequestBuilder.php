<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPartialAXTreeRequestBuilder
{
	private $nodeId;

	private $backendNodeId;

	private $objectId;

	private $fetchRelatives;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetPartialAXTreeRequest
	{
		$instance = new GetPartialAXTreeRequest();
		$instance->nodeId = $this->nodeId;
		$instance->backendNodeId = $this->backendNodeId;
		$instance->objectId = $this->objectId;
		$instance->fetchRelatives = $this->fetchRelatives;
		return $instance;
	}


	/**
	 * @param int $nodeId
	 *
	 * @return self
	 */
	public function setNodeId($nodeId): self
	{
		$this->nodeId = $nodeId;
		return $this;
	}


	/**
	 * @param int $backendNodeId
	 *
	 * @return self
	 */
	public function setBackendNodeId($backendNodeId): self
	{
		$this->backendNodeId = $backendNodeId;
		return $this;
	}


	/**
	 * @param string $objectId
	 *
	 * @return self
	 */
	public function setObjectId($objectId): self
	{
		$this->objectId = $objectId;
		return $this;
	}


	/**
	 * @param bool|null $fetchRelatives
	 *
	 * @return self
	 */
	public function setFetchRelatives($fetchRelatives): self
	{
		$this->fetchRelatives = $fetchRelatives;
		return $this;
	}
}
