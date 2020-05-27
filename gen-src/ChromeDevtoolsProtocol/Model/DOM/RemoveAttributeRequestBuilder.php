<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveAttributeRequestBuilder
{
	private $nodeId;
	private $name;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveAttributeRequest
	{
		$instance = new RemoveAttributeRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->name === null) {
			throw new BuilderException('Property [name] is required.');
		}
		$instance->name = $this->name;
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
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName($name): self
	{
		$this->name = $name;
		return $this;
	}
}
