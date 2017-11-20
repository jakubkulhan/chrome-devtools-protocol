<?php
namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRemoteLocationsRequestBuilder
{
	private $locations;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetRemoteLocationsRequest
	{
		$instance = new SetRemoteLocationsRequest();
		if ($this->locations === null) {
			throw new BuilderException('Property [locations] is required.');
		}
		$instance->locations = $this->locations;
		return $instance;
	}


	/**
	 * @param RemoteLocation[] $locations
	 *
	 * @return self
	 */
	public function setLocations($locations): self
	{
		$this->locations = $locations;
		return $this;
	}
}
