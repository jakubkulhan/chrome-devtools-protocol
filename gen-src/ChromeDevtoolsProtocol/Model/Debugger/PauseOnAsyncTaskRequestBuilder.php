<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PauseOnAsyncTaskRequestBuilder
{
	private $asyncTaskId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): PauseOnAsyncTaskRequest
	{
		$instance = new PauseOnAsyncTaskRequest();
		if ($this->asyncTaskId === null) {
			throw new BuilderException('Property [asyncTaskId] is required.');
		}
		$instance->asyncTaskId = $this->asyncTaskId;
		return $instance;
	}


	/**
	 * @param string $asyncTaskId
	 *
	 * @return self
	 */
	public function setAsyncTaskId($asyncTaskId): self
	{
		$this->asyncTaskId = $asyncTaskId;
		return $this;
	}
}
