<?php
namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StopWorkerRequestBuilder
{
	private $versionId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StopWorkerRequest
	{
		$instance = new StopWorkerRequest();
		if ($this->versionId === null) {
			throw new BuilderException('Property [versionId] is required.');
		}
		$instance->versionId = $this->versionId;
		return $instance;
	}


	/**
	 * @param string $versionId
	 *
	 * @return self
	 */
	public function setVersionId($versionId): self
	{
		$this->versionId = $versionId;
		return $this;
	}
}
