<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFullAXTreeRequestBuilder
{
	private $depth;
	private $frameId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetFullAXTreeRequest
	{
		$instance = new GetFullAXTreeRequest();
		$instance->depth = $this->depth;
		$instance->frameId = $this->frameId;
		return $instance;
	}


	/**
	 * @param int|null $depth
	 *
	 * @return self
	 */
	public function setDepth($depth): self
	{
		$this->depth = $depth;
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
