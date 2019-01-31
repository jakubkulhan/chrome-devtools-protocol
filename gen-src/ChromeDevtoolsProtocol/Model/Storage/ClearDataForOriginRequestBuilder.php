<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearDataForOriginRequestBuilder
{
	private $origin;

	private $storageTypes;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ClearDataForOriginRequest
	{
		$instance = new ClearDataForOriginRequest();
		if ($this->origin === null) {
			throw new BuilderException('Property [origin] is required.');
		}
		$instance->origin = $this->origin;
		if ($this->storageTypes === null) {
			throw new BuilderException('Property [storageTypes] is required.');
		}
		$instance->storageTypes = $this->storageTypes;
		return $instance;
	}


	/**
	 * @param string $origin
	 *
	 * @return self
	 */
	public function setOrigin($origin): self
	{
		$this->origin = $origin;
		return $this;
	}


	/**
	 * @param string $storageTypes
	 *
	 * @return self
	 */
	public function setStorageTypes($storageTypes): self
	{
		$this->storageTypes = $storageTypes;
		return $this;
	}
}
