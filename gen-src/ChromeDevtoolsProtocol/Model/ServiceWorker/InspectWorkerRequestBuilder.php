<?php
namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectWorkerRequestBuilder
{
	private $versionId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): InspectWorkerRequest
	{
		$instance = new InspectWorkerRequest();
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
