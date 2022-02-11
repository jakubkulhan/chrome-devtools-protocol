<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRootAXNodeRequestBuilder
{
	private $frameId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetRootAXNodeRequest
	{
		$instance = new GetRootAXNodeRequest();
		$instance->frameId = $this->frameId;
		return $instance;
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
