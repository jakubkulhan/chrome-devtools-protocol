<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightSourceOrderRequestBuilder
{
	private $sourceOrderConfig;
	private $nodeId;
	private $backendNodeId;
	private $objectId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): HighlightSourceOrderRequest
	{
		$instance = new HighlightSourceOrderRequest();
		if ($this->sourceOrderConfig === null) {
			throw new BuilderException('Property [sourceOrderConfig] is required.');
		}
		$instance->sourceOrderConfig = $this->sourceOrderConfig;
		$instance->nodeId = $this->nodeId;
		$instance->backendNodeId = $this->backendNodeId;
		$instance->objectId = $this->objectId;
		return $instance;
	}


	/**
	 * @param SourceOrderConfig $sourceOrderConfig
	 *
	 * @return self
	 */
	public function setSourceOrderConfig($sourceOrderConfig): self
	{
		$this->sourceOrderConfig = $sourceOrderConfig;
		return $this;
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
}
