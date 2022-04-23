<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.evaluate command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EvaluateRequest implements \JsonSerializable
{
	/**
	 * Expression to evaluate.
	 *
	 * @var string
	 */
	public $expression;

	/**
	 * Symbolic group name that can be used to release multiple objects.
	 *
	 * @var string|null
	 */
	public $objectGroup;

	/**
	 * Determines whether Command Line API should be available during the evaluation.
	 *
	 * @var bool|null
	 */
	public $includeCommandLineAPI;

	/**
	 * In silent mode exceptions thrown during evaluation are not reported and do not pause execution. Overrides `setPauseOnException` state.
	 *
	 * @var bool|null
	 */
	public $silent;

	/**
	 * Specifies in which execution context to perform evaluation. If the parameter is omitted the evaluation will be performed in the context of the inspected page. This is mutually exclusive with `uniqueContextId`, which offers an alternative way to identify the execution context that is more reliable in a multi-process environment.
	 *
	 * @var int
	 */
	public $contextId;

	/**
	 * Whether the result is expected to be a JSON object that should be sent by value.
	 *
	 * @var bool|null
	 */
	public $returnByValue;

	/**
	 * Whether preview should be generated for the result.
	 *
	 * @var bool|null
	 */
	public $generatePreview;

	/**
	 * Whether execution should be treated as initiated by user in the UI.
	 *
	 * @var bool|null
	 */
	public $userGesture;

	/**
	 * Whether execution should `await` for resulting value and return once awaited promise is resolved.
	 *
	 * @var bool|null
	 */
	public $awaitPromise;

	/**
	 * Whether to throw an exception if side effect cannot be ruled out during evaluation. This implies `disableBreaks` below.
	 *
	 * @var bool|null
	 */
	public $throwOnSideEffect;

	/**
	 * Terminate execution after timing out (number of milliseconds).
	 *
	 * @var int|float
	 */
	public $timeout;

	/**
	 * Disable breakpoints during execution.
	 *
	 * @var bool|null
	 */
	public $disableBreaks;

	/**
	 * Setting this flag to true enables `let` re-declaration and top-level `await`. Note that `let` variables can only be re-declared if they originate from `replMode` themselves.
	 *
	 * @var bool|null
	 */
	public $replMode;

	/**
	 * The Content Security Policy (CSP) for the target might block 'unsafe-eval' which includes eval(), Function(), setTimeout() and setInterval() when called with non-callable arguments. This flag bypasses CSP for this evaluation and allows unsafe-eval. Defaults to true.
	 *
	 * @var bool|null
	 */
	public $allowUnsafeEvalBlockedByCSP;

	/**
	 * An alternative way to specify the execution context to evaluate in. Compared to contextId that may be reused across processes, this is guaranteed to be system-unique, so it can be used to prevent accidental evaluation of the expression in context different than intended (e.g. as a result of navigation across process boundaries). This is mutually exclusive with `contextId`.
	 *
	 * @var string|null
	 */
	public $uniqueContextId;

	/**
	 * Whether the result should be serialized according to https://w3c.github.io/webdriver-bidi.
	 *
	 * @var bool|null
	 */
	public $generateWebDriverValue;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->expression)) {
			$instance->expression = (string)$data->expression;
		}
		if (isset($data->objectGroup)) {
			$instance->objectGroup = (string)$data->objectGroup;
		}
		if (isset($data->includeCommandLineAPI)) {
			$instance->includeCommandLineAPI = (bool)$data->includeCommandLineAPI;
		}
		if (isset($data->silent)) {
			$instance->silent = (bool)$data->silent;
		}
		if (isset($data->contextId)) {
			$instance->contextId = (int)$data->contextId;
		}
		if (isset($data->returnByValue)) {
			$instance->returnByValue = (bool)$data->returnByValue;
		}
		if (isset($data->generatePreview)) {
			$instance->generatePreview = (bool)$data->generatePreview;
		}
		if (isset($data->userGesture)) {
			$instance->userGesture = (bool)$data->userGesture;
		}
		if (isset($data->awaitPromise)) {
			$instance->awaitPromise = (bool)$data->awaitPromise;
		}
		if (isset($data->throwOnSideEffect)) {
			$instance->throwOnSideEffect = (bool)$data->throwOnSideEffect;
		}
		if (isset($data->timeout)) {
			$instance->timeout = $data->timeout;
		}
		if (isset($data->disableBreaks)) {
			$instance->disableBreaks = (bool)$data->disableBreaks;
		}
		if (isset($data->replMode)) {
			$instance->replMode = (bool)$data->replMode;
		}
		if (isset($data->allowUnsafeEvalBlockedByCSP)) {
			$instance->allowUnsafeEvalBlockedByCSP = (bool)$data->allowUnsafeEvalBlockedByCSP;
		}
		if (isset($data->uniqueContextId)) {
			$instance->uniqueContextId = (string)$data->uniqueContextId;
		}
		if (isset($data->generateWebDriverValue)) {
			$instance->generateWebDriverValue = (bool)$data->generateWebDriverValue;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->expression !== null) {
			$data->expression = $this->expression;
		}
		if ($this->objectGroup !== null) {
			$data->objectGroup = $this->objectGroup;
		}
		if ($this->includeCommandLineAPI !== null) {
			$data->includeCommandLineAPI = $this->includeCommandLineAPI;
		}
		if ($this->silent !== null) {
			$data->silent = $this->silent;
		}
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		if ($this->returnByValue !== null) {
			$data->returnByValue = $this->returnByValue;
		}
		if ($this->generatePreview !== null) {
			$data->generatePreview = $this->generatePreview;
		}
		if ($this->userGesture !== null) {
			$data->userGesture = $this->userGesture;
		}
		if ($this->awaitPromise !== null) {
			$data->awaitPromise = $this->awaitPromise;
		}
		if ($this->throwOnSideEffect !== null) {
			$data->throwOnSideEffect = $this->throwOnSideEffect;
		}
		if ($this->timeout !== null) {
			$data->timeout = $this->timeout;
		}
		if ($this->disableBreaks !== null) {
			$data->disableBreaks = $this->disableBreaks;
		}
		if ($this->replMode !== null) {
			$data->replMode = $this->replMode;
		}
		if ($this->allowUnsafeEvalBlockedByCSP !== null) {
			$data->allowUnsafeEvalBlockedByCSP = $this->allowUnsafeEvalBlockedByCSP;
		}
		if ($this->uniqueContextId !== null) {
			$data->uniqueContextId = $this->uniqueContextId;
		}
		if ($this->generateWebDriverValue !== null) {
			$data->generateWebDriverValue = $this->generateWebDriverValue;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EvaluateRequestBuilder
	 */
	public static function builder(): EvaluateRequestBuilder
	{
		return new EvaluateRequestBuilder();
	}
}
