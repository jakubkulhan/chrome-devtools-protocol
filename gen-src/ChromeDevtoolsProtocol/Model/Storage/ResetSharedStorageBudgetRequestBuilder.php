<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResetSharedStorageBudgetRequestBuilder
{
	private $ownerOrigin;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ResetSharedStorageBudgetRequest
	{
		$instance = new ResetSharedStorageBudgetRequest();
		if ($this->ownerOrigin === null) {
			throw new BuilderException('Property [ownerOrigin] is required.');
		}
		$instance->ownerOrigin = $this->ownerOrigin;
		return $instance;
	}


	/**
	 * @param string $ownerOrigin
	 *
	 * @return self
	 */
	public function setOwnerOrigin($ownerOrigin): self
	{
		$this->ownerOrigin = $ownerOrigin;
		return $this;
	}
}
