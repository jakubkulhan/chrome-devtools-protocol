<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScrollIntoViewIfNeededRequestBuilder
{
	private $nodeId;

	private $backendNodeId;

	private $objectId;

	private $rect;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ScrollIntoViewIfNeededRequest
	{
		$instance = new ScrollIntoViewIfNeededRequest();
		$instance->nodeId = $this->nodeId;
		$instance->backendNodeId = $this->backendNodeId;
		$instance->objectId = $this->objectId;
		$instance->rect = $this->rect;
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
	 * @param Rect|null $rect
	 *
	 * @return self
	 */
	public function setRect($rect): self
	{
		$this->rect = $rect;
		return $this;
	}
}
