<?php
namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAsyncCallStackDepthRequestBuilder
{
	private $maxDepth;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAsyncCallStackDepthRequest
	{
		$instance = new SetAsyncCallStackDepthRequest();
		if ($this->maxDepth === null) {
			throw new BuilderException('Property [maxDepth] is required.');
		}
		$instance->maxDepth = $this->maxDepth;
		return $instance;
	}


	/**
	 * @param int $maxDepth
	 *
	 * @return self
	 */
	public function setMaxDepth($maxDepth): self
	{
		$this->maxDepth = $maxDepth;
		return $this;
	}
}
