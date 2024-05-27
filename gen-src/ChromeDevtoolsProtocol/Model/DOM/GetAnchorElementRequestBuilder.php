<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAnchorElementRequestBuilder
{
	private $nodeId;
	private $anchorSpecifier;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetAnchorElementRequest
	{
		$instance = new GetAnchorElementRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		$instance->anchorSpecifier = $this->anchorSpecifier;
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
	 * @param string|null $anchorSpecifier
	 *
	 * @return self
	 */
	public function setAnchorSpecifier($anchorSpecifier): self
	{
		$this->anchorSpecifier = $anchorSpecifier;
		return $this;
	}
}
