<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecuteWasmEvaluatorRequestBuilder
{
	private $callFrameId;

	private $evaluator;

	private $timeout;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ExecuteWasmEvaluatorRequest
	{
		$instance = new ExecuteWasmEvaluatorRequest();
		if ($this->callFrameId === null) {
			throw new BuilderException('Property [callFrameId] is required.');
		}
		$instance->callFrameId = $this->callFrameId;
		if ($this->evaluator === null) {
			throw new BuilderException('Property [evaluator] is required.');
		}
		$instance->evaluator = $this->evaluator;
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
	 * @param string $evaluator
	 *
	 * @return self
	 */
	public function setEvaluator($evaluator): self
	{
		$this->evaluator = $evaluator;
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
