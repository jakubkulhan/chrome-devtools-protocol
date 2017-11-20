<?php
namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAutoAttachRequestBuilder
{
	private $autoAttach;

	private $waitForDebuggerOnStart;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAutoAttachRequest
	{
		$instance = new SetAutoAttachRequest();
		if ($this->autoAttach === null) {
			throw new BuilderException('Property [autoAttach] is required.');
		}
		$instance->autoAttach = $this->autoAttach;
		if ($this->waitForDebuggerOnStart === null) {
			throw new BuilderException('Property [waitForDebuggerOnStart] is required.');
		}
		$instance->waitForDebuggerOnStart = $this->waitForDebuggerOnStart;
		return $instance;
	}


	/**
	 * @param bool $autoAttach
	 *
	 * @return self
	 */
	public function setAutoAttach($autoAttach): self
	{
		$this->autoAttach = $autoAttach;
		return $this;
	}


	/**
	 * @param bool $waitForDebuggerOnStart
	 *
	 * @return self
	 */
	public function setWaitForDebuggerOnStart($waitForDebuggerOnStart): self
	{
		$this->waitForDebuggerOnStart = $waitForDebuggerOnStart;
		return $this;
	}
}
