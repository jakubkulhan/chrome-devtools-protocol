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
}
