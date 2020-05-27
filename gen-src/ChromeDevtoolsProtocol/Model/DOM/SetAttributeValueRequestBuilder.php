<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttributeValueRequestBuilder
{
	private $nodeId;
	private $name;
	private $value;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAttributeValueRequest
	{
		$instance = new SetAttributeValueRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->name === null) {
			throw new BuilderException('Property [name] is required.');
		}
		$instance->name = $this->name;
		if ($this->value === null) {
			throw new BuilderException('Property [value] is required.');
		}
		$instance->value = $this->value;
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


	/**
	 * @param string $value
	 *
	 * @return self
	 */
	public function setValue($value): self
	{
		$this->value = $value;
		return $this;
	}
}
