<?php

namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OpenDevToolsRequestBuilder
{
	private $targetId;
	private $panelId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): OpenDevToolsRequest
	{
		$instance = new OpenDevToolsRequest();
		if ($this->targetId === null) {
			throw new BuilderException('Property [targetId] is required.');
		}
		$instance->targetId = $this->targetId;
		$instance->panelId = $this->panelId;
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


	/**
	 * @param string|null $panelId
	 *
	 * @return self
	 */
	public function setPanelId($panelId): self
	{
		$this->panelId = $panelId;
		return $this;
	}
}
