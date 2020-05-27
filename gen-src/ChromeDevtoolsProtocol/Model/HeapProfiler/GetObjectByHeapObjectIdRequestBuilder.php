<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetObjectByHeapObjectIdRequestBuilder
{
	private $objectId;
	private $objectGroup;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetObjectByHeapObjectIdRequest
	{
		$instance = new GetObjectByHeapObjectIdRequest();
		if ($this->objectId === null) {
			throw new BuilderException('Property [objectId] is required.');
		}
		$instance->objectId = $this->objectId;
		$instance->objectGroup = $this->objectGroup;
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


	/**
	 * @param string|null $objectGroup
	 *
	 * @return self
	 */
	public function setObjectGroup($objectGroup): self
	{
		$this->objectGroup = $objectGroup;
		return $this;
	}
}
