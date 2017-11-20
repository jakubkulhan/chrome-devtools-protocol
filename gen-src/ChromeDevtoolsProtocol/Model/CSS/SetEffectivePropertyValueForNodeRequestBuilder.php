<?php
namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEffectivePropertyValueForNodeRequestBuilder
{
	private $nodeId;

	private $propertyName;

	private $value;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetEffectivePropertyValueForNodeRequest
	{
		$instance = new SetEffectivePropertyValueForNodeRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->propertyName === null) {
			throw new BuilderException('Property [propertyName] is required.');
		}
		$instance->propertyName = $this->propertyName;
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
	 * @param string $propertyName
	 *
	 * @return self
	 */
	public function setPropertyName($propertyName): self
	{
		$this->propertyName = $propertyName;
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
