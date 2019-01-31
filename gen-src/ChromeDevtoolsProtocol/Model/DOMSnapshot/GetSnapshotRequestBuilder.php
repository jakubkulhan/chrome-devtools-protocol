<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSnapshotRequestBuilder
{
	private $computedStyleWhitelist;

	private $includeEventListeners;

	private $includePaintOrder;

	private $includeUserAgentShadowTree;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetSnapshotRequest
	{
		$instance = new GetSnapshotRequest();
		if ($this->computedStyleWhitelist === null) {
			throw new BuilderException('Property [computedStyleWhitelist] is required.');
		}
		$instance->computedStyleWhitelist = $this->computedStyleWhitelist;
		$instance->includeEventListeners = $this->includeEventListeners;
		$instance->includePaintOrder = $this->includePaintOrder;
		$instance->includeUserAgentShadowTree = $this->includeUserAgentShadowTree;
		return $instance;
	}


	/**
	 * @param string[] $computedStyleWhitelist
	 *
	 * @return self
	 */
	public function setComputedStyleWhitelist($computedStyleWhitelist): self
	{
		$this->computedStyleWhitelist = $computedStyleWhitelist;
		return $this;
	}


	/**
	 * @param bool|null $includeEventListeners
	 *
	 * @return self
	 */
	public function setIncludeEventListeners($includeEventListeners): self
	{
		$this->includeEventListeners = $includeEventListeners;
		return $this;
	}


	/**
	 * @param bool|null $includePaintOrder
	 *
	 * @return self
	 */
	public function setIncludePaintOrder($includePaintOrder): self
	{
		$this->includePaintOrder = $includePaintOrder;
		return $this;
	}


	/**
	 * @param bool|null $includeUserAgentShadowTree
	 *
	 * @return self
	 */
	public function setIncludeUserAgentShadowTree($includeUserAgentShadowTree): self
	{
		$this->includeUserAgentShadowTree = $includeUserAgentShadowTree;
		return $this;
	}
}
