<?php
namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightNodeRequestBuilder
{
	private $highlightConfig;

	private $nodeId;

	private $backendNodeId;

	private $objectId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): HighlightNodeRequest
	{
		$instance = new HighlightNodeRequest();
		if ($this->highlightConfig === null) {
			throw new BuilderException('Property [highlightConfig] is required.');
		}
		$instance->highlightConfig = $this->highlightConfig;
		$instance->nodeId = $this->nodeId;
		$instance->backendNodeId = $this->backendNodeId;
		$instance->objectId = $this->objectId;
		return $instance;
	}


	/**
	 * @param HighlightConfig $highlightConfig
	 *
	 * @return self
	 */
	public function setHighlightConfig($highlightConfig): self
	{
		$this->highlightConfig = $highlightConfig;
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
