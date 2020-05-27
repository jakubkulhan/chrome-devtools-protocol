<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class QuerySelectorRequestBuilder
{
	private $nodeId;
	private $selector;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): QuerySelectorRequest
	{
		$instance = new QuerySelectorRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->selector === null) {
			throw new BuilderException('Property [selector] is required.');
		}
		$instance->selector = $this->selector;
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
	 * @param string $selector
	 *
	 * @return self
	 */
	public function setSelector($selector): self
	{
		$this->selector = $selector;
		return $this;
	}
}
