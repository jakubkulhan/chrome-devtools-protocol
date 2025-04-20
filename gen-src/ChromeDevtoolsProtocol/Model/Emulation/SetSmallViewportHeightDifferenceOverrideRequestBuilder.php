<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSmallViewportHeightDifferenceOverrideRequestBuilder
{
	private $difference;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetSmallViewportHeightDifferenceOverrideRequest
	{
		$instance = new SetSmallViewportHeightDifferenceOverrideRequest();
		if ($this->difference === null) {
			throw new BuilderException('Property [difference] is required.');
		}
		$instance->difference = $this->difference;
		return $instance;
	}


	/**
	 * @param int $difference
	 *
	 * @return self
	 */
	public function setDifference($difference): self
	{
		$this->difference = $difference;
		return $this;
	}
}
