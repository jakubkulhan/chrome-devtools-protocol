<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateAdvertisementRequestBuilder
{
	private $entry;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SimulateAdvertisementRequest
	{
		$instance = new SimulateAdvertisementRequest();
		if ($this->entry === null) {
			throw new BuilderException('Property [entry] is required.');
		}
		$instance->entry = $this->entry;
		return $instance;
	}


	/**
	 * @param ScanEntry $entry
	 *
	 * @return self
	 */
	public function setEntry($entry): self
	{
		$this->entry = $entry;
		return $this;
	}
}
