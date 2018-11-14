<?php
namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetWindowForTargetRequestBuilder
{
	private $targetId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetWindowForTargetRequest
	{
		$instance = new GetWindowForTargetRequest();
		$instance->targetId = $this->targetId;
		return $instance;
	}


	/**
	 * @param string $targetId
	 *
	 * @return self
	 */
	public function setTargetId($targetId): self
	{
		$this->targetId = $targetId;
		return $this;
	}
}
