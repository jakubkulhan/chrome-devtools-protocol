<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EvaluateOnCallFrameRequestBuilder
{
	private $callFrameId;

	private $expression;

	private $objectGroup;

	private $includeCommandLineAPI;

	private $silent;

	private $returnByValue;

	private $generatePreview;

	private $throwOnSideEffect;

	private $timeout;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EvaluateOnCallFrameRequest
	{
		$instance = new EvaluateOnCallFrameRequest();
		if ($this->callFrameId === null) {
			throw new BuilderException('Property [callFrameId] is required.');
		}
		$instance->callFrameId = $this->callFrameId;
		if ($this->expression === null) {
			throw new BuilderException('Property [expression] is required.');
		}
		$instance->expression = $this->expression;
		$instance->objectGroup = $this->objectGroup;
		$instance->includeCommandLineAPI = $this->includeCommandLineAPI;
		$instance->silent = $this->silent;
		$instance->returnByValue = $this->returnByValue;
		$instance->generatePreview = $this->generatePreview;
		$instance->throwOnSideEffect = $this->throwOnSideEffect;
		$instance->timeout = $this->timeout;
		return $instance;
	}


	/**
	 * @param string $callFrameId
	 *
	 * @return self
	 */
	public function setCallFrameId($callFrameId): self
	{
		$this->callFrameId = $callFrameId;
		return $this;
	}


	/**
	 * @param string $expression
	 *
	 * @return self
	 */
	public function setExpression($expression): self
	{
		$this->expression = $expression;
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
	 * @param bool|null $throwOnSideEffect
	 *
	 * @return self
	 */
	public function setThrowOnSideEffect($throwOnSideEffect): self
	{
		$this->throwOnSideEffect = $throwOnSideEffect;
		return $this;
	}


	/**
	 * @param int|float $timeout
	 *
	 * @return self
	 */
	public function setTimeout($timeout): self
	{
		$this->timeout = $timeout;
		return $this;
	}
}
