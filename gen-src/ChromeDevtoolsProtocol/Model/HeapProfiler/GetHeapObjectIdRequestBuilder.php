<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHeapObjectIdRequestBuilder
{
	private $objectId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetHeapObjectIdRequest
	{
		$instance = new GetHeapObjectIdRequest();
		if ($this->objectId === null) {
			throw new BuilderException('Property [objectId] is required.');
		}
		$instance->objectId = $this->objectId;
		return $instance;
	}


	/**
	 * @param string $objectId
	 *
	 * @return self
	 */
	public function setObjectId($objectId): self
	{
		$this->objectId = $objectId;
		return $this;
	}
}
