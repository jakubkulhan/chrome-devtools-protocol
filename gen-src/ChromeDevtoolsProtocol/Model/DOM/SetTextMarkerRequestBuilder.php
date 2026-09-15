<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTextMarkerRequestBuilder
{
	private $nodeId;
	private $backendNodeId;
	private $objectId;
	private $type;
	private $start;
	private $end;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetTextMarkerRequest
	{
		$instance = new SetTextMarkerRequest();
		$instance->nodeId = $this->nodeId;
		$instance->backendNodeId = $this->backendNodeId;
		$instance->objectId = $this->objectId;
		if ($this->type === null) {
			throw new BuilderException('Property [type] is required.');
		}
		$instance->type = $this->type;
		if ($this->start === null) {
			throw new BuilderException('Property [start] is required.');
		}
		$instance->start = $this->start;
		if ($this->end === null) {
			throw new BuilderException('Property [end] is required.');
		}
		$instance->end = $this->end;
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
	 * @param string $type
	 *
	 * @return self
	 */
	public function setType($type): self
	{
		$this->type = $type;
		return $this;
	}


	/**
	 * @param int $start
	 *
	 * @return self
	 */
	public function setStart($start): self
	{
		$this->start = $start;
		return $this;
	}


	/**
	 * @param int $end
	 *
	 * @return self
	 */
	public function setEnd($end): self
	{
		$this->end = $end;
		return $this;
	}
}
