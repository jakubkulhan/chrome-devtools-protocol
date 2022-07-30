<?php

namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AutoAttachRelatedRequestBuilder
{
	private $targetId;
	private $waitForDebuggerOnStart;
	private $filter;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AutoAttachRelatedRequest
	{
		$instance = new AutoAttachRelatedRequest();
		if ($this->targetId === null) {
			throw new BuilderException('Property [targetId] is required.');
		}
		$instance->targetId = $this->targetId;
		if ($this->waitForDebuggerOnStart === null) {
			throw new BuilderException('Property [waitForDebuggerOnStart] is required.');
		}
		$instance->waitForDebuggerOnStart = $this->waitForDebuggerOnStart;
		$instance->filter = $this->filter;
		return $instance;
	}


	/**
	 * @param string $targetId
	 *
	 * @return self
	 */
	public function setTargetId($targetId): self
	{
		$this->targetId = $targetId;
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


	/**
	 * @param FilterEntry[] $filter
	 *
	 * @return self
	 */
	public function setFilter($filter): self
	{
		$this->filter = $filter;
		return $this;
	}
}
