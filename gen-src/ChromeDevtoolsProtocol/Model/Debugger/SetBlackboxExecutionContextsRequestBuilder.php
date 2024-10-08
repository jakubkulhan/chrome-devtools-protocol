<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBlackboxExecutionContextsRequestBuilder
{
	private $uniqueIds;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBlackboxExecutionContextsRequest
	{
		$instance = new SetBlackboxExecutionContextsRequest();
		if ($this->uniqueIds === null) {
			throw new BuilderException('Property [uniqueIds] is required.');
		}
		$instance->uniqueIds = $this->uniqueIds;
		return $instance;
	}


	/**
	 * @param string[] $uniqueIds
	 *
	 * @return self
	 */
	public function setUniqueIds($uniqueIds): self
	{
		$this->uniqueIds = $uniqueIds;
		return $this;
	}
}
