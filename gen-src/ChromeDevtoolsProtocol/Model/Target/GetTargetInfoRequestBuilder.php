<?php
namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetTargetInfoRequestBuilder
{
	private $targetId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetTargetInfoRequest
	{
		$instance = new GetTargetInfoRequest();
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
