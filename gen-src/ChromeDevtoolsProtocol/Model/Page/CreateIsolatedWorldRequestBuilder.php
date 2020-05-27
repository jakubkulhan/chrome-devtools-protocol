<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateIsolatedWorldRequestBuilder
{
	private $frameId;
	private $worldName;
	private $grantUniveralAccess;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CreateIsolatedWorldRequest
	{
		$instance = new CreateIsolatedWorldRequest();
		if ($this->frameId === null) {
			throw new BuilderException('Property [frameId] is required.');
		}
		$instance->frameId = $this->frameId;
		$instance->worldName = $this->worldName;
		$instance->grantUniveralAccess = $this->grantUniveralAccess;
		return $instance;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}


	/**
	 * @param string|null $worldName
	 *
	 * @return self
	 */
	public function setWorldName($worldName): self
	{
		$this->worldName = $worldName;
		return $this;
	}


	/**
	 * @param bool|null $grantUniveralAccess
	 *
	 * @return self
	 */
	public function setGrantUniveralAccess($grantUniveralAccess): self
	{
		$this->grantUniveralAccess = $grantUniveralAccess;
		return $this;
	}
}
