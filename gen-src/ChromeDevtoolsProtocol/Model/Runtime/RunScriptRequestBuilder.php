<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RunScriptRequestBuilder
{
	private $scriptId;
	private $executionContextId;
	private $objectGroup;
	private $silent;
	private $includeCommandLineAPI;
	private $returnByValue;
	private $generatePreview;
	private $awaitPromise;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RunScriptRequest
	{
		$instance = new RunScriptRequest();
		if ($this->scriptId === null) {
			throw new BuilderException('Property [scriptId] is required.');
		}
		$instance->scriptId = $this->scriptId;
		$instance->executionContextId = $this->executionContextId;
		$instance->objectGroup = $this->objectGroup;
		$instance->silent = $this->silent;
		$instance->includeCommandLineAPI = $this->includeCommandLineAPI;
		$instance->returnByValue = $this->returnByValue;
		$instance->generatePreview = $this->generatePreview;
		$instance->awaitPromise = $this->awaitPromise;
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
	 * @param int $executionContextId
	 *
	 * @return self
	 */
	public function setExecutionContextId($executionContextId): self
	{
		$this->executionContextId = $executionContextId;
		return $this;
	}


	/**
	 * @param string|null $objectGroup
	 *
	 * @return self
	 */
	public function setObjectGroup($objectGroup): self
	{
		$this->objectGroup = $objectGroup;
		return $this;
	}


	/**
	 * @param bool|null $silent
	 *
	 * @return self
	 */
	public function setSilent($silent): self
	{
		$this->silent = $silent;
		return $this;
	}


	/**
	 * @param bool|null $includeCommandLineAPI
	 *
	 * @return self
	 */
	public function setIncludeCommandLineAPI($includeCommandLineAPI): self
	{
		$this->includeCommandLineAPI = $includeCommandLineAPI;
		return $this;
	}


	/**
	 * @param bool|null $returnByValue
	 *
	 * @return self
	 */
	public function setReturnByValue($returnByValue): self
	{
		$this->returnByValue = $returnByValue;
		return $this;
	}


	/**
	 * @param bool|null $generatePreview
	 *
	 * @return self
	 */
	public function setGeneratePreview($generatePreview): self
	{
		$this->generatePreview = $generatePreview;
		return $this;
	}


	/**
	 * @param bool|null $awaitPromise
	 *
	 * @return self
	 */
	public function setAwaitPromise($awaitPromise): self
	{
		$this->awaitPromise = $awaitPromise;
		return $this;
	}
}
