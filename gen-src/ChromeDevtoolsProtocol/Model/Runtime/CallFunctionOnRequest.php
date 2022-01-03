<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.callFunctionOn command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CallFunctionOnRequest implements \JsonSerializable
{
	/**
	 * Declaration of the function to call.
	 *
	 * @var string
	 */
	public $functionDeclaration;

	/**
	 * Identifier of the object to call function on. Either objectId or executionContextId should be specified.
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * Call arguments. All call arguments must belong to the same JavaScript world as the target object.
	 *
	 * @var CallArgument[]|null
	 */
	public $arguments;

	/**
	 * In silent mode exceptions thrown during evaluation are not reported and do not pause execution. Overrides `setPauseOnException` state.
	 *
	 * @var bool|null
	 */
	public $silent;

	/**
	 * Whether the result is expected to be a JSON object which should be sent by value.
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
	 * Specifies execution context which global object will be used to call function on. Either executionContextId or objectId should be specified.
	 *
	 * @var int
	 */
	public $executionContextId;

	/**
	 * Symbolic group name that can be used to release multiple objects. If objectGroup is not specified and objectId is, objectGroup will be inherited from object.
	 *
	 * @var string|null
	 */
	public $objectGroup;

	/**
	 * Whether to throw an exception if side effect cannot be ruled out during evaluation.
	 *
	 * @var bool|null
	 */
	public $throwOnSideEffect;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->functionDeclaration)) {
			$instance->functionDeclaration = (string)$data->functionDeclaration;
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		if (isset($data->arguments)) {
			$instance->arguments = [];
			foreach ($data->arguments as $item) {
				$instance->arguments[] = CallArgument::fromJson($item);
			}
		}
		if (isset($data->silent)) {
			$instance->silent = (bool)$data->silent;
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
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		if (isset($data->objectGroup)) {
			$instance->objectGroup = (string)$data->objectGroup;
		}
		if (isset($data->throwOnSideEffect)) {
			$instance->throwOnSideEffect = (bool)$data->throwOnSideEffect;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->functionDeclaration !== null) {
			$data->functionDeclaration = $this->functionDeclaration;
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		if ($this->arguments !== null) {
			$data->arguments = [];
			foreach ($this->arguments as $item) {
				$data->arguments[] = $item->jsonSerialize();
			}
		}
		if ($this->silent !== null) {
			$data->silent = $this->silent;
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
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		if ($this->objectGroup !== null) {
			$data->objectGroup = $this->objectGroup;
		}
		if ($this->throwOnSideEffect !== null) {
			$data->throwOnSideEffect = $this->throwOnSideEffect;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CallFunctionOnRequestBuilder
	 */
	public static function builder(): CallFunctionOnRequestBuilder
	{
		return new CallFunctionOnRequestBuilder();
	}
}
