<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetElementByRelationRequestBuilder
{
	private $nodeId;
	private $relation;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetElementByRelationRequest
	{
		$instance = new GetElementByRelationRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->relation === null) {
			throw new BuilderException('Property [relation] is required.');
		}
		$instance->relation = $this->relation;
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
	 * @param string $relation
	 *
	 * @return self
	 */
	public function setRelation($relation): self
	{
		$this->relation = $relation;
		return $this;
	}
}
