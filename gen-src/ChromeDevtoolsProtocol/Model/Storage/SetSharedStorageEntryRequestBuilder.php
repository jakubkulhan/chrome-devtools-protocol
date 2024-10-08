<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSharedStorageEntryRequestBuilder
{
	private $ownerOrigin;
	private $key;
	private $value;
	private $ignoreIfPresent;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetSharedStorageEntryRequest
	{
		$instance = new SetSharedStorageEntryRequest();
		if ($this->ownerOrigin === null) {
			throw new BuilderException('Property [ownerOrigin] is required.');
		}
		$instance->ownerOrigin = $this->ownerOrigin;
		if ($this->key === null) {
			throw new BuilderException('Property [key] is required.');
		}
		$instance->key = $this->key;
		if ($this->value === null) {
			throw new BuilderException('Property [value] is required.');
		}
		$instance->value = $this->value;
		$instance->ignoreIfPresent = $this->ignoreIfPresent;
		return $instance;
	}


	/**
	 * @param string $ownerOrigin
	 *
	 * @return self
	 */
	public function setOwnerOrigin($ownerOrigin): self
	{
		$this->ownerOrigin = $ownerOrigin;
		return $this;
	}


	/**
	 * @param string $key
	 *
	 * @return self
	 */
	public function setKey($key): self
	{
		$this->key = $key;
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


	/**
	 * @param bool|null $ignoreIfPresent
	 *
	 * @return self
	 */
	public function setIgnoreIfPresent($ignoreIfPresent): self
	{
		$this->ignoreIfPresent = $ignoreIfPresent;
		return $this;
	}
}
