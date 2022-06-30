<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetScriptSourceRequestBuilder
{
	private $scriptId;
	private $scriptSource;
	private $dryRun;
	private $allowTopFrameEditing;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetScriptSourceRequest
	{
		$instance = new SetScriptSourceRequest();
		if ($this->scriptId === null) {
			throw new BuilderException('Property [scriptId] is required.');
		}
		$instance->scriptId = $this->scriptId;
		if ($this->scriptSource === null) {
			throw new BuilderException('Property [scriptSource] is required.');
		}
		$instance->scriptSource = $this->scriptSource;
		$instance->dryRun = $this->dryRun;
		$instance->allowTopFrameEditing = $this->allowTopFrameEditing;
		return $instance;
	}


	/**
	 * @param string $scriptId
	 *
	 * @return self
	 */
	public function setScriptId($scriptId): self
	{
		$this->scriptId = $scriptId;
		return $this;
	}


	/**
	 * @param string $scriptSource
	 *
	 * @return self
	 */
	public function setScriptSource($scriptSource): self
	{
		$this->scriptSource = $scriptSource;
		return $this;
	}


	/**
	 * @param bool|null $dryRun
	 *
	 * @return self
	 */
	public function setDryRun($dryRun): self
	{
		$this->dryRun = $dryRun;
		return $this;
	}


	/**
	 * @param bool|null $allowTopFrameEditing
	 *
	 * @return self
	 */
	public function setAllowTopFrameEditing($allowTopFrameEditing): self
	{
		$this->allowTopFrameEditing = $allowTopFrameEditing;
		return $this;
	}
}
