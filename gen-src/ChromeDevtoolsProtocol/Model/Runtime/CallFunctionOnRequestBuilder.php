<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CallFunctionOnRequestBuilder
{
	private $functionDeclaration;
	private $objectId;
	private $arguments;
	private $silent;
	private $returnByValue;
	private $generatePreview;
	private $userGesture;
	private $awaitPromise;
	private $executionContextId;
	private $objectGroup;
	private $throwOnSideEffect;
	private $uniqueContextId;
	private $generateWebDriverValue;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CallFunctionOnRequest
	{
		$instance = new CallFunctionOnRequest();
		if ($this->functionDeclaration === null) {
			throw new BuilderException('Property [functionDeclaration] is required.');
		}
		$instance->functionDeclaration = $this->functionDeclaration;
		$instance->objectId = $this->objectId;
		$instance->arguments = $this->arguments;
		$instance->silent = $this->silent;
		$instance->returnByValue = $this->returnByValue;
		$instance->generatePreview = $this->generatePreview;
		$instance->userGesture = $this->userGesture;
		$instance->awaitPromise = $this->awaitPromise;
		$instance->executionContextId = $this->executionContextId;
		$instance->objectGroup = $this->objectGroup;
		$instance->throwOnSideEffect = $this->throwOnSideEffect;
		$instance->uniqueContextId = $this->uniqueContextId;
		$instance->generateWebDriverValue = $this->generateWebDriverValue;
		return $instance;
	}


	/**
	 * @param string $functionDeclaration
	 *
	 * @return self
	 */
	public function setFunctionDeclaration($functionDeclaration): self
	{
		$this->functionDeclaration = $functionDeclaration;
		return $this;
	}


	/**
	 * @param string $objectId
	 *
	 * @return self
	 */
	public function setObjectId($objectId): self
	{
		$this->objectId = $objectId;
		return $this;
	}


	/**
	 * @param CallArgument[]|null $arguments
	 *
	 * @return self
	 */
	public function setArguments($arguments): self
	{
		$this->arguments = $arguments;
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
	 * @param bool|null $userGesture
	 *
	 * @return self
	 */
	public function setUserGesture($userGesture): self
	{
		$this->userGesture = $userGesture;
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
	 * @param string|null $uniqueContextId
	 *
	 * @return self
	 */
	public function setUniqueContextId($uniqueContextId): self
	{
		$this->uniqueContextId = $uniqueContextId;
		return $this;
	}


	/**
	 * @param bool|null $generateWebDriverValue
	 *
	 * @return self
	 */
	public function setGenerateWebDriverValue($generateWebDriverValue): self
	{
		$this->generateWebDriverValue = $generateWebDriverValue;
		return $this;
	}
}
