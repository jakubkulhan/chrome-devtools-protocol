<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttributionReportingLocalTestingModeRequestBuilder
{
	private $enabled;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAttributionReportingLocalTestingModeRequest
	{
		$instance = new SetAttributionReportingLocalTestingModeRequest();
		if ($this->enabled === null) {
			throw new BuilderException('Property [enabled] is required.');
		}
		$instance->enabled = $this->enabled;
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
}
