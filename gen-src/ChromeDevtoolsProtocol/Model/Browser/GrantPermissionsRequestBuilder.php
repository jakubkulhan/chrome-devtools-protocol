<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GrantPermissionsRequestBuilder
{
	private $permissions;
	private $origin;
	private $browserContextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GrantPermissionsRequest
	{
		$instance = new GrantPermissionsRequest();
		if ($this->permissions === null) {
			throw new BuilderException('Property [permissions] is required.');
		}
		$instance->permissions = $this->permissions;
		$instance->origin = $this->origin;
		$instance->browserContextId = $this->browserContextId;
		return $instance;
	}


	/**
	 * @param string[] $permissions
	 *
	 * @return self
	 */
	public function setPermissions($permissions): self
	{
		$this->permissions = $permissions;
		return $this;
	}


	/**
	 * @param string|null $origin
	 *
	 * @return self
	 */
	public function setOrigin($origin): self
	{
		$this->origin = $origin;
		return $this;
	}


	/**
	 * @param string $browserContextId
	 *
	 * @return self
	 */
	public function setBrowserContextId($browserContextId): self
	{
		$this->browserContextId = $browserContextId;
		return $this;
	}
}
