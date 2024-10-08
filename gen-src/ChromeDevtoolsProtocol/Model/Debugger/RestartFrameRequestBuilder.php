<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RestartFrameRequestBuilder
{
	private $callFrameId;
	private $mode;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RestartFrameRequest
	{
		$instance = new RestartFrameRequest();
		if ($this->callFrameId === null) {
			throw new BuilderException('Property [callFrameId] is required.');
		}
		$instance->callFrameId = $this->callFrameId;
		$instance->mode = $this->mode;
		return $instance;
	}


	/**
	 * @param string $callFrameId
	 *
	 * @return self
	 */
	public function setCallFrameId($callFrameId): self
	{
		$this->callFrameId = $callFrameId;
		return $this;
	}


	/**
	 * @param string|null $mode
	 *
	 * @return self
	 */
	public function setMode($mode): self
	{
		$this->mode = $mode;
		return $this;
	}
}
