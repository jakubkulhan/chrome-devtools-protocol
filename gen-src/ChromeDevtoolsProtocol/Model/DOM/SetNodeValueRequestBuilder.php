<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetNodeValueRequestBuilder
{
	private $nodeId;
	private $value;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetNodeValueRequest
	{
		$instance = new SetNodeValueRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
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
