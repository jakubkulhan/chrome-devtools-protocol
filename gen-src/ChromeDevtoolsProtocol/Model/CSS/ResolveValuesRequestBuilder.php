<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResolveValuesRequestBuilder
{
	private $values;
	private $nodeId;
	private $propertyName;
	private $pseudoType;
	private $pseudoIdentifier;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ResolveValuesRequest
	{
		$instance = new ResolveValuesRequest();
		if ($this->values === null) {
			throw new BuilderException('Property [values] is required.');
		}
		$instance->values = $this->values;
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		$instance->propertyName = $this->propertyName;
		$instance->pseudoType = $this->pseudoType;
		$instance->pseudoIdentifier = $this->pseudoIdentifier;
		return $instance;
	}


	/**
	 * @param string[] $values
	 *
	 * @return self
	 */
	public function setValues($values): self
	{
		$this->values = $values;
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
	 * @param string|null $propertyName
	 *
	 * @return self
	 */
	public function setPropertyName($propertyName): self
	{
		$this->propertyName = $propertyName;
		return $this;
	}


	/**
	 * @param string $pseudoType
	 *
	 * @return self
	 */
	public function setPseudoType($pseudoType): self
	{
		$this->pseudoType = $pseudoType;
		return $this;
	}


	/**
	 * @param string|null $pseudoIdentifier
	 *
	 * @return self
	 */
	public function setPseudoIdentifier($pseudoIdentifier): self
	{
		$this->pseudoIdentifier = $pseudoIdentifier;
		return $this;
	}
}
