<?php
namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDiscoverTargetsRequestBuilder
{
	private $discover;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDiscoverTargetsRequest
	{
		$instance = new SetDiscoverTargetsRequest();
		if ($this->discover === null) {
			throw new BuilderException('Property [discover] is required.');
		}
		$instance->discover = $this->discover;
		return $instance;
	}


	/**
	 * @param bool $discover
	 *
	 * @return self
	 */
	public function setDiscover($discover): self
	{
		$this->discover = $discover;
		return $this;
	}
}
