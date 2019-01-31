<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PushNodesByBackendIdsToFrontendRequestBuilder
{
	private $backendNodeIds;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): PushNodesByBackendIdsToFrontendRequest
	{
		$instance = new PushNodesByBackendIdsToFrontendRequest();
		if ($this->backendNodeIds === null) {
			throw new BuilderException('Property [backendNodeIds] is required.');
		}
		$instance->backendNodeIds = $this->backendNodeIds;
		return $instance;
	}


	/**
	 * @param int[] $backendNodeIds
	 *
	 * @return self
	 */
	public function setBackendNodeIds($backendNodeIds): self
	{
		$this->backendNodeIds = $backendNodeIds;
		return $this;
	}
}
