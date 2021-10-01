<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPropertiesRequestBuilder
{
	private $objectId;
	private $ownProperties;
	private $accessorPropertiesOnly;
	private $generatePreview;
	private $nonIndexedPropertiesOnly;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetPropertiesRequest
	{
		$instance = new GetPropertiesRequest();
		if ($this->objectId === null) {
			throw new BuilderException('Property [objectId] is required.');
		}
		$instance->objectId = $this->objectId;
		$instance->ownProperties = $this->ownProperties;
		$instance->accessorPropertiesOnly = $this->accessorPropertiesOnly;
		$instance->generatePreview = $this->generatePreview;
		$instance->nonIndexedPropertiesOnly = $this->nonIndexedPropertiesOnly;
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
	 * @param bool|null $ownProperties
	 *
	 * @return self
	 */
	public function setOwnProperties($ownProperties): self
	{
		$this->ownProperties = $ownProperties;
		return $this;
	}


	/**
	 * @param bool|null $accessorPropertiesOnly
	 *
	 * @return self
	 */
	public function setAccessorPropertiesOnly($accessorPropertiesOnly): self
	{
		$this->accessorPropertiesOnly = $accessorPropertiesOnly;
		return $this;
	}


	/**
	 * @param bool|null $generatePreview
	 *
	 * @return self
	 */
	public function setGeneratePreview($generatePreview): self
	{
		$this->generatePreview = $generatePreview;
		return $this;
	}


	/**
	 * @param bool|null $nonIndexedPropertiesOnly
	 *
	 * @return self
	 */
	public function setNonIndexedPropertiesOnly($nonIndexedPropertiesOnly): self
	{
		$this->nonIndexedPropertiesOnly = $nonIndexedPropertiesOnly;
		return $this;
	}
}
