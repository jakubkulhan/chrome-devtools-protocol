<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSensorOverrideEnabledRequestBuilder
{
	private $enabled;
	private $type;
	private $metadata;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetSensorOverrideEnabledRequest
	{
		$instance = new SetSensorOverrideEnabledRequest();
		if ($this->enabled === null) {
			throw new BuilderException('Property [enabled] is required.');
		}
		$instance->enabled = $this->enabled;
		if ($this->type === null) {
			throw new BuilderException('Property [type] is required.');
		}
		$instance->type = $this->type;
		$instance->metadata = $this->metadata;
		return $instance;
	}


	/**
	 * @param bool $enabled
	 *
	 * @return self
	 */
	public function setEnabled($enabled): self
	{
		$this->enabled = $enabled;
		return $this;
	}


	/**
	 * @param string $type
	 *
	 * @return self
	 */
	public function setType($type): self
	{
		$this->type = $type;
		return $this;
	}


	/**
	 * @param SensorMetadata|null $metadata
	 *
	 * @return self
	 */
	public function setMetadata($metadata): self
	{
		$this->metadata = $metadata;
		return $this;
	}
}
