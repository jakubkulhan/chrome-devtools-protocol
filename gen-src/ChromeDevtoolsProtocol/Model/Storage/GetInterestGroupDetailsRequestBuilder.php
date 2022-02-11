<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetInterestGroupDetailsRequestBuilder
{
	private $ownerOrigin;
	private $name;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetInterestGroupDetailsRequest
	{
		$instance = new GetInterestGroupDetailsRequest();
		if ($this->ownerOrigin === null) {
			throw new BuilderException('Property [ownerOrigin] is required.');
		}
		$instance->ownerOrigin = $this->ownerOrigin;
		if ($this->name === null) {
			throw new BuilderException('Property [name] is required.');
		}
		$instance->name = $this->name;
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
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName($name): self
	{
		$this->name = $name;
		return $this;
	}
}
