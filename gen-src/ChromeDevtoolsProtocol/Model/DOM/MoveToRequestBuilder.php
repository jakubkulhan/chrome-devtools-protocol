<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MoveToRequestBuilder
{
	private $nodeId;
	private $targetNodeId;
	private $insertBeforeNodeId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): MoveToRequest
	{
		$instance = new MoveToRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->targetNodeId === null) {
			throw new BuilderException('Property [targetNodeId] is required.');
		}
		$instance->targetNodeId = $this->targetNodeId;
		$instance->insertBeforeNodeId = $this->insertBeforeNodeId;
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
	 * @param int $targetNodeId
	 *
	 * @return self
	 */
	public function setTargetNodeId($targetNodeId): self
	{
		$this->targetNodeId = $targetNodeId;
		return $this;
	}


	/**
	 * @param int $insertBeforeNodeId
	 *
	 * @return self
	 */
	public function setInsertBeforeNodeId($insertBeforeNodeId): self
	{
		$this->insertBeforeNodeId = $insertBeforeNodeId;
		return $this;
	}
}
