<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecuteBrowserCommandRequestBuilder
{
	private $commandId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ExecuteBrowserCommandRequest
	{
		$instance = new ExecuteBrowserCommandRequest();
		if ($this->commandId === null) {
			throw new BuilderException('Property [commandId] is required.');
		}
		$instance->commandId = $this->commandId;
		return $instance;
	}


	/**
	 * @param string $commandId
	 *
	 * @return self
	 */
	public function setCommandId($commandId): self
	{
		$this->commandId = $commandId;
		return $this;
	}
}
