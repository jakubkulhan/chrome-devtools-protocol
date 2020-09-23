<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class QueryAXTreeRequestBuilder
{
	private $nodeId;
	private $backendNodeId;
	private $objectId;
	private $accessibleName;
	private $role;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): QueryAXTreeRequest
	{
		$instance = new QueryAXTreeRequest();
		$instance->nodeId = $this->nodeId;
		$instance->backendNodeId = $this->backendNodeId;
		$instance->objectId = $this->objectId;
		$instance->accessibleName = $this->accessibleName;
		$instance->role = $this->role;
		return $instance;
	}


	/**
	 * @param int $nodeId
	 *
	 * @return self
	 */
	public function setNodeId($nodeId): self
	{
		$this->nodeId = $nodeId;
		return $this;
	}


	/**
	 * @param int $backendNodeId
	 *
	 * @return self
	 */
	public function setBackendNodeId($backendNodeId): self
	{
		$this->backendNodeId = $backendNodeId;
		return $this;
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
	 * @param string|null $accessibleName
	 *
	 * @return self
	 */
	public function setAccessibleName($accessibleName): self
	{
		$this->accessibleName = $accessibleName;
		return $this;
	}


	/**
	 * @param string|null $role
	 *
	 * @return self
	 */
	public function setRole($role): self
	{
		$this->role = $role;
		return $this;
	}
}
