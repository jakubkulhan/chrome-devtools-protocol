<?php

namespace ChromeDevtoolsProtocol\Model\Cast;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartDesktopMirroringRequestBuilder
{
	private $sinkName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartDesktopMirroringRequest
	{
		$instance = new StartDesktopMirroringRequest();
		if ($this->sinkName === null) {
			throw new BuilderException('Property [sinkName] is required.');
		}
		$instance->sinkName = $this->sinkName;
		return $instance;
	}


	/**
	 * @param string $sinkName
	 *
	 * @return self
	 */
	public function setSinkName($sinkName): self
	{
		$this->sinkName = $sinkName;
		return $this;
	}
}
