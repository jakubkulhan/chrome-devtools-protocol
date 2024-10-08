<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSensorOverrideReadingsRequestBuilder
{
	private $type;
	private $reading;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetSensorOverrideReadingsRequest
	{
		$instance = new SetSensorOverrideReadingsRequest();
		if ($this->type === null) {
			throw new BuilderException('Property [type] is required.');
		}
		$instance->type = $this->type;
		if ($this->reading === null) {
			throw new BuilderException('Property [reading] is required.');
		}
		$instance->reading = $this->reading;
		return $instance;
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
	 * @param SensorReading $reading
	 *
	 * @return self
	 */
	public function setReading($reading): self
	{
		$this->reading = $reading;
		return $this;
	}
}
