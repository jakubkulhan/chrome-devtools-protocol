<?php
namespace ChromeDevtoolsProtocol\Model\Accessibility;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPartialAXTreeRequestBuilder
{
	private $nodeId;

	private $fetchRelatives;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetPartialAXTreeRequest
	{
		$instance = new GetPartialAXTreeRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		$instance->fetchRelatives = $this->fetchRelatives;
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
	 * @param bool|null $fetchRelatives
	 *
	 * @return self
	 */
	public function setFetchRelatives($fetchRelatives): self
	{
		$this->fetchRelatives = $fetchRelatives;
		return $this;
	}
}
