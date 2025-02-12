<?php

namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExposeDevToolsProtocolRequestBuilder
{
	private $targetId;
	private $bindingName;
	private $inheritPermissions;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ExposeDevToolsProtocolRequest
	{
		$instance = new ExposeDevToolsProtocolRequest();
		if ($this->targetId === null) {
			throw new BuilderException('Property [targetId] is required.');
		}
		$instance->targetId = $this->targetId;
		$instance->bindingName = $this->bindingName;
		$instance->inheritPermissions = $this->inheritPermissions;
		return $instance;
	}


	/**
	 * @param string $targetId
	 *
	 * @return self
	 */
	public function setTargetId($targetId): self
	{
		$this->targetId = $targetId;
		return $this;
	}


	/**
	 * @param string|null $bindingName
	 *
	 * @return self
	 */
	public function setBindingName($bindingName): self
	{
		$this->bindingName = $bindingName;
		return $this;
	}


	/**
	 * @param bool|null $inheritPermissions
	 *
	 * @return self
	 */
	public function setInheritPermissions($inheritPermissions): self
	{
		$this->inheritPermissions = $inheritPermissions;
		return $this;
	}
}
