<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DescribeNodeRequestBuilder
{
	private $nodeId;
	private $backendNodeId;
	private $objectId;
	private $depth;
	private $pierce;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DescribeNodeRequest
	{
		$instance = new DescribeNodeRequest();
		$instance->nodeId = $this->nodeId;
		$instance->backendNodeId = $this->backendNodeId;
		$instance->objectId = $this->objectId;
		$instance->depth = $this->depth;
		$instance->pierce = $this->pierce;
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
	 * @param int|null $depth
	 *
	 * @return self
	 */
	public function setDepth($depth): self
	{
		$this->depth = $depth;
		return $this;
	}


	/**
	 * @param bool|null $pierce
	 *
	 * @return self
	 */
	public function setPierce($pierce): self
	{
		$this->pierce = $pierce;
		return $this;
	}
}
