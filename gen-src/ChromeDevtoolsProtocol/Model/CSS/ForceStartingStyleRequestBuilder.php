<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ForceStartingStyleRequestBuilder
{
	private $nodeId;
	private $forced;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ForceStartingStyleRequest
	{
		$instance = new ForceStartingStyleRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->forced === null) {
			throw new BuilderException('Property [forced] is required.');
		}
		$instance->forced = $this->forced;
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
	 * @param bool $forced
	 *
	 * @return self
	 */
	public function setForced($forced): self
	{
		$this->forced = $forced;
		return $this;
	}
}
