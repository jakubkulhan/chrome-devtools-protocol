<?php
namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class QueryObjectsRequestBuilder
{
	private $prototypeObjectId;

	private $objectGroup;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): QueryObjectsRequest
	{
		$instance = new QueryObjectsRequest();
		if ($this->prototypeObjectId === null) {
			throw new BuilderException('Property [prototypeObjectId] is required.');
		}
		$instance->prototypeObjectId = $this->prototypeObjectId;
		$instance->objectGroup = $this->objectGroup;
		return $instance;
	}


	/**
	 * @param string $prototypeObjectId
	 *
	 * @return self
	 */
	public function setPrototypeObjectId($prototypeObjectId): self
	{
		$this->prototypeObjectId = $prototypeObjectId;
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
