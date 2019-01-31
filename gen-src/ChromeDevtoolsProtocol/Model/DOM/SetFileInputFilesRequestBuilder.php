<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetFileInputFilesRequestBuilder
{
	private $files;

	private $nodeId;

	private $backendNodeId;

	private $objectId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetFileInputFilesRequest
	{
		$instance = new SetFileInputFilesRequest();
		if ($this->files === null) {
			throw new BuilderException('Property [files] is required.');
		}
		$instance->files = $this->files;
		$instance->nodeId = $this->nodeId;
		$instance->backendNodeId = $this->backendNodeId;
		$instance->objectId = $this->objectId;
		return $instance;
	}


	/**
	 * @param string[] $files
	 *
	 * @return self
	 */
	public function setFiles($files): self
	{
		$this->files = $files;
		return $this;
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
}
