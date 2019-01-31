<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestChildNodesRequestBuilder
{
	private $nodeId;

	private $depth;

	private $pierce;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestChildNodesRequest
	{
		$instance = new RequestChildNodesRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
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
