<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddInspectedHeapObjectRequestBuilder
{
	private $heapObjectId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddInspectedHeapObjectRequest
	{
		$instance = new AddInspectedHeapObjectRequest();
		if ($this->heapObjectId === null) {
			throw new BuilderException('Property [heapObjectId] is required.');
		}
		$instance->heapObjectId = $this->heapObjectId;
		return $instance;
	}


	/**
	 * @param string $heapObjectId
	 *
	 * @return self
	 */
	public function setHeapObjectId($heapObjectId): self
	{
		$this->heapObjectId = $heapObjectId;
		return $this;
	}
}
