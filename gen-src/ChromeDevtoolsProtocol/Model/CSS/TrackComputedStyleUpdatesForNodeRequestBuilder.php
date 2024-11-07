<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TrackComputedStyleUpdatesForNodeRequestBuilder
{
	private $nodeId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): TrackComputedStyleUpdatesForNodeRequest
	{
		$instance = new TrackComputedStyleUpdatesForNodeRequest();
		$instance->nodeId = $this->nodeId;
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
}
