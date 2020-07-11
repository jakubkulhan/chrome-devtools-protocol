<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetGridHighlightObjectsForTestRequestBuilder
{
	private $nodeIds;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetGridHighlightObjectsForTestRequest
	{
		$instance = new GetGridHighlightObjectsForTestRequest();
		if ($this->nodeIds === null) {
			throw new BuilderException('Property [nodeIds] is required.');
		}
		$instance->nodeIds = $this->nodeIds;
		return $instance;
	}


	/**
	 * @param int[] $nodeIds
	 *
	 * @return self
	 */
	public function setNodeIds($nodeIds): self
	{
		$this->nodeIds = $nodeIds;
		return $this;
	}
}
