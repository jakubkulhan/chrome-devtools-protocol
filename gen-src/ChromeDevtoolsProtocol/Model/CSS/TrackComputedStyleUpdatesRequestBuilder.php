<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TrackComputedStyleUpdatesRequestBuilder
{
	private $propertiesToTrack;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): TrackComputedStyleUpdatesRequest
	{
		$instance = new TrackComputedStyleUpdatesRequest();
		if ($this->propertiesToTrack === null) {
			throw new BuilderException('Property [propertiesToTrack] is required.');
		}
		$instance->propertiesToTrack = $this->propertiesToTrack;
		return $instance;
	}


	/**
	 * @param CSSComputedStyleProperty[] $propertiesToTrack
	 *
	 * @return self
	 */
	public function setPropertiesToTrack($propertiesToTrack): self
	{
		$this->propertiesToTrack = $propertiesToTrack;
		return $this;
	}
}
