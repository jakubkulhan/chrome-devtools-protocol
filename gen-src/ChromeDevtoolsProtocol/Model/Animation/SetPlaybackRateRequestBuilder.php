<?php
namespace ChromeDevtoolsProtocol\Model\Animation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPlaybackRateRequestBuilder
{
	private $playbackRate;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPlaybackRateRequest
	{
		$instance = new SetPlaybackRateRequest();
		if ($this->playbackRate === null) {
			throw new BuilderException('Property [playbackRate] is required.');
		}
		$instance->playbackRate = $this->playbackRate;
		return $instance;
	}


	/**
	 * @param int|float $playbackRate
	 *
	 * @return self
	 */
	public function setPlaybackRate($playbackRate): self
	{
		$this->playbackRate = $playbackRate;
		return $this;
	}
}
