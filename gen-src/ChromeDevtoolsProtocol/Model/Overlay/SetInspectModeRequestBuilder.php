<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInspectModeRequestBuilder
{
	private $mode;

	private $highlightConfig;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetInspectModeRequest
	{
		$instance = new SetInspectModeRequest();
		if ($this->mode === null) {
			throw new BuilderException('Property [mode] is required.');
		}
		$instance->mode = $this->mode;
		$instance->highlightConfig = $this->highlightConfig;
		return $instance;
	}


	/**
	 * @param string $mode
	 *
	 * @return self
	 */
	public function setMode($mode): self
	{
		$this->mode = $mode;
		return $this;
	}


	/**
	 * @param HighlightConfig|null $highlightConfig
	 *
	 * @return self
	 */
	public function setHighlightConfig($highlightConfig): self
	{
		$this->highlightConfig = $highlightConfig;
		return $this;
	}
}
