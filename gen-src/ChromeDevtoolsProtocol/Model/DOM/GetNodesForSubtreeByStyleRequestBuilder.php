<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetNodesForSubtreeByStyleRequestBuilder
{
	private $nodeId;
	private $computedStyles;
	private $pierce;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetNodesForSubtreeByStyleRequest
	{
		$instance = new GetNodesForSubtreeByStyleRequest();
		if ($this->nodeId === null) {
			throw new BuilderException('Property [nodeId] is required.');
		}
		$instance->nodeId = $this->nodeId;
		if ($this->computedStyles === null) {
			throw new BuilderException('Property [computedStyles] is required.');
		}
		$instance->computedStyles = $this->computedStyles;
		$instance->pierce = $this->pierce;
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
	 * @param CSSComputedStyleProperty[] $computedStyles
	 *
	 * @return self
	 */
	public function setComputedStyles($computedStyles): self
	{
		$this->computedStyles = $computedStyles;
		return $this;
	}


	/**
	 * @param bool|null $pierce
	 *
	 * @return self
	 */
	public function setPierce($pierce): self
	{
		$this->pierce = $pierce;
		return $this;
	}
}
