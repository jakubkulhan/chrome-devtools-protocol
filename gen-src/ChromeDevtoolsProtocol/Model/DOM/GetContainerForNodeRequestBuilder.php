<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetContainerForNodeRequestBuilder
{
	private $nodeId;
	private $containerName;
	private $physicalAxes;
	private $logicalAxes;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetContainerForNodeRequest
	{
		$instance = new GetContainerForNodeRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		$instance->containerName = $this->containerName;
		$instance->physicalAxes = $this->physicalAxes;
		$instance->logicalAxes = $this->logicalAxes;
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
	 * @param string|null $containerName
	 *
	 * @return self
	 */
	public function setContainerName($containerName): self
	{
		$this->containerName = $containerName;
		return $this;
	}


	/**
	 * @param string $physicalAxes
	 *
	 * @return self
	 */
	public function setPhysicalAxes($physicalAxes): self
	{
		$this->physicalAxes = $physicalAxes;
		return $this;
	}


	/**
	 * @param string $logicalAxes
	 *
	 * @return self
	 */
	public function setLogicalAxes($logicalAxes): self
	{
		$this->logicalAxes = $logicalAxes;
		return $this;
	}
}
