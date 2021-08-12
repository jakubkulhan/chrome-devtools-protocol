<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetChildAXNodesRequestBuilder
{
	private $id;
	private $frameId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetChildAXNodesRequest
	{
		$instance = new GetChildAXNodesRequest();
		if ($this->id === null) {
			throw new BuilderException('Property [id] is required.');
		}
		$instance->id = $this->id;
		$instance->frameId = $this->frameId;
		return $instance;
	}


	/**
	 * @param string $id
	 *
	 * @return self
	 */
	public function setId($id): self
	{
		$this->id = $id;
		return $this;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}
}
