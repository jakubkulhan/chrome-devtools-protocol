<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\Runtime\StackTraceId;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PauseOnAsyncCallRequestBuilder
{
	private $parentStackTraceId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): PauseOnAsyncCallRequest
	{
		$instance = new PauseOnAsyncCallRequest();
		if ($this->parentStackTraceId === null) {
			throw new BuilderException('Property [parentStackTraceId] is required.');
		}
		$instance->parentStackTraceId = $this->parentStackTraceId;
		return $instance;
	}


	/**
	 * @param StackTraceId $parentStackTraceId
	 *
	 * @return self
	 */
	public function setParentStackTraceId($parentStackTraceId): self
	{
		$this->parentStackTraceId = $parentStackTraceId;
		return $this;
	}
}
