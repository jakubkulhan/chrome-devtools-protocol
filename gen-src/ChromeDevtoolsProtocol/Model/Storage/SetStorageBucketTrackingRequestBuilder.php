<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetStorageBucketTrackingRequestBuilder
{
	private $storageKey;
	private $enable;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetStorageBucketTrackingRequest
	{
		$instance = new SetStorageBucketTrackingRequest();
		if ($this->storageKey === null) {
			throw new BuilderException('Property [storageKey] is required.');
		}
		$instance->storageKey = $this->storageKey;
		if ($this->enable === null) {
			throw new BuilderException('Property [enable] is required.');
		}
		$instance->enable = $this->enable;
		return $instance;
	}


	/**
	 * @param string $storageKey
	 *
	 * @return self
	 */
	public function setStorageKey($storageKey): self
	{
		$this->storageKey = $storageKey;
		return $this;
	}


	/**
	 * @param bool $enable
	 *
	 * @return self
	 */
	public function setEnable($enable): self
	{
		$this->enable = $enable;
		return $this;
	}
}
