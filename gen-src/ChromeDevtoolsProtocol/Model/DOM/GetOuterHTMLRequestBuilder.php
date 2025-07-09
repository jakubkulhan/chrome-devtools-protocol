<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOuterHTMLRequestBuilder
{
	private $nodeId;
	private $backendNodeId;
	private $objectId;
	private $includeShadowDOM;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetOuterHTMLRequest
	{
		$instance = new GetOuterHTMLRequest();
		$instance->nodeId = $this->nodeId;
		$instance->backendNodeId = $this->backendNodeId;
		$instance->objectId = $this->objectId;
		$instance->includeShadowDOM = $this->includeShadowDOM;
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
	 * @param bool|null $includeShadowDOM
	 *
	 * @return self
	 */
	public function setIncludeShadowDOM($includeShadowDOM): self
	{
		$this->includeShadowDOM = $includeShadowDOM;
		return $this;
	}
}
