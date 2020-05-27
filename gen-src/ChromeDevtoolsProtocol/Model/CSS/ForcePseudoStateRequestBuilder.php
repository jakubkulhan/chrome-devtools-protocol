<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ForcePseudoStateRequestBuilder
{
	private $nodeId;
	private $forcedPseudoClasses;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ForcePseudoStateRequest
	{
		$instance = new ForcePseudoStateRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->forcedPseudoClasses === null) {
			throw new BuilderException('Property [forcedPseudoClasses] is required.');
		}
		$instance->forcedPseudoClasses = $this->forcedPseudoClasses;
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
	 * @param string[] $forcedPseudoClasses
	 *
	 * @return self
	 */
	public function setForcedPseudoClasses($forcedPseudoClasses): self
	{
		$this->forcedPseudoClasses = $forcedPseudoClasses;
		return $this;
	}
}
