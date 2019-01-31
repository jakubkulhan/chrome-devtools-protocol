<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\Runtime\StackTraceId;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetStackTraceRequestBuilder
{
	private $stackTraceId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetStackTraceRequest
	{
		$instance = new GetStackTraceRequest();
		if ($this->stackTraceId === null) {
			throw new BuilderException('Property [stackTraceId] is required.');
		}
		$instance->stackTraceId = $this->stackTraceId;
		return $instance;
	}


	/**
	 * @param StackTraceId $stackTraceId
	 *
	 * @return self
	 */
	public function setStackTraceId($stackTraceId): self
	{
		$this->stackTraceId = $stackTraceId;
		return $this;
	}
}
