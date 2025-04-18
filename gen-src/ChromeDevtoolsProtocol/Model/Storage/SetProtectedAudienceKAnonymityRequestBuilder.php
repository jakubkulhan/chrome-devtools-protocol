<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetProtectedAudienceKAnonymityRequestBuilder
{
	private $owner;
	private $name;
	private $hashes;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetProtectedAudienceKAnonymityRequest
	{
		$instance = new SetProtectedAudienceKAnonymityRequest();
		if ($this->owner === null) {
			throw new BuilderException('Property [owner] is required.');
		}
		$instance->owner = $this->owner;
		if ($this->name === null) {
			throw new BuilderException('Property [name] is required.');
		}
		$instance->name = $this->name;
		if ($this->hashes === null) {
			throw new BuilderException('Property [hashes] is required.');
		}
		$instance->hashes = $this->hashes;
		return $instance;
	}


	/**
	 * @param string $owner
	 *
	 * @return self
	 */
	public function setOwner($owner): self
	{
		$this->owner = $owner;
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
	 * @param string[] $hashes
	 *
	 * @return self
	 */
	public function setHashes($hashes): self
	{
		$this->hashes = $hashes;
		return $this;
	}
}
