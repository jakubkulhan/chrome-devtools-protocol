<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Runtime\AddBindingRequest;
use ChromeDevtoolsProtocol\Model\Runtime\AwaitPromiseRequest;
use ChromeDevtoolsProtocol\Model\Runtime\AwaitPromiseResponse;
use ChromeDevtoolsProtocol\Model\Runtime\BindingCalledEvent;
use ChromeDevtoolsProtocol\Model\Runtime\CallFunctionOnRequest;
use ChromeDevtoolsProtocol\Model\Runtime\CallFunctionOnResponse;
use ChromeDevtoolsProtocol\Model\Runtime\CompileScriptRequest;
use ChromeDevtoolsProtocol\Model\Runtime\CompileScriptResponse;
use ChromeDevtoolsProtocol\Model\Runtime\ConsoleAPICalledEvent;
use ChromeDevtoolsProtocol\Model\Runtime\EvaluateRequest;
use ChromeDevtoolsProtocol\Model\Runtime\EvaluateResponse;
use ChromeDevtoolsProtocol\Model\Runtime\ExceptionRevokedEvent;
use ChromeDevtoolsProtocol\Model\Runtime\ExceptionThrownEvent;
use ChromeDevtoolsProtocol\Model\Runtime\ExecutionContextCreatedEvent;
use ChromeDevtoolsProtocol\Model\Runtime\ExecutionContextDestroyedEvent;
use ChromeDevtoolsProtocol\Model\Runtime\ExecutionContextsClearedEvent;
use ChromeDevtoolsProtocol\Model\Runtime\GetExceptionDetailsRequest;
use ChromeDevtoolsProtocol\Model\Runtime\GetExceptionDetailsResponse;
use ChromeDevtoolsProtocol\Model\Runtime\GetHeapUsageResponse;
use ChromeDevtoolsProtocol\Model\Runtime\GetIsolateIdResponse;
use ChromeDevtoolsProtocol\Model\Runtime\GetPropertiesRequest;
use ChromeDevtoolsProtocol\Model\Runtime\GetPropertiesResponse;
use ChromeDevtoolsProtocol\Model\Runtime\GlobalLexicalScopeNamesRequest;
use ChromeDevtoolsProtocol\Model\Runtime\GlobalLexicalScopeNamesResponse;
use ChromeDevtoolsProtocol\Model\Runtime\InspectRequestedEvent;
use ChromeDevtoolsProtocol\Model\Runtime\QueryObjectsRequest;
use ChromeDevtoolsProtocol\Model\Runtime\QueryObjectsResponse;
use ChromeDevtoolsProtocol\Model\Runtime\ReleaseObjectGroupRequest;
use ChromeDevtoolsProtocol\Model\Runtime\ReleaseObjectRequest;
use ChromeDevtoolsProtocol\Model\Runtime\RemoveBindingRequest;
use ChromeDevtoolsProtocol\Model\Runtime\RunScriptRequest;
use ChromeDevtoolsProtocol\Model\Runtime\RunScriptResponse;
use ChromeDevtoolsProtocol\Model\Runtime\SetAsyncCallStackDepthRequest;
use ChromeDevtoolsProtocol\Model\Runtime\SetCustomObjectFormatterEnabledRequest;
use ChromeDevtoolsProtocol\Model\Runtime\SetMaxCallStackSizeToCaptureRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class RuntimeDomain implements RuntimeDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function addBinding(ContextInterface $ctx, AddBindingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Runtime.addBinding', $request);
	}


	public function awaitPromise(ContextInterface $ctx, AwaitPromiseRequest $request): AwaitPromiseResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.awaitPromise', $request);
		return AwaitPromiseResponse::fromJson($response);
	}


	public function callFunctionOn(ContextInterface $ctx, CallFunctionOnRequest $request): CallFunctionOnResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.callFunctionOn', $request);
		return CallFunctionOnResponse::fromJson($response);
	}


	public function compileScript(ContextInterface $ctx, CompileScriptRequest $request): CompileScriptResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.compileScript', $request);
		return CompileScriptResponse::fromJson($response);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Runtime.disable', $request);
	}


	public function discardConsoleEntries(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Runtime.discardConsoleEntries', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Runtime.enable', $request);
	}


	public function evaluate(ContextInterface $ctx, EvaluateRequest $request): EvaluateResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.evaluate', $request);
		return EvaluateResponse::fromJson($response);
	}


	public function getExceptionDetails(
		ContextInterface $ctx,
		GetExceptionDetailsRequest $request
	): GetExceptionDetailsResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.getExceptionDetails', $request);
		return GetExceptionDetailsResponse::fromJson($response);
	}


	public function getHeapUsage(ContextInterface $ctx): GetHeapUsageResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.getHeapUsage', $request);
		return GetHeapUsageResponse::fromJson($response);
	}


	public function getIsolateId(ContextInterface $ctx): GetIsolateIdResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.getIsolateId', $request);
		return GetIsolateIdResponse::fromJson($response);
	}


	public function getProperties(ContextInterface $ctx, GetPropertiesRequest $request): GetPropertiesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.getProperties', $request);
		return GetPropertiesResponse::fromJson($response);
	}


	public function globalLexicalScopeNames(
		ContextInterface $ctx,
		GlobalLexicalScopeNamesRequest $request
	): GlobalLexicalScopeNamesResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.globalLexicalScopeNames', $request);
		return GlobalLexicalScopeNamesResponse::fromJson($response);
	}


	public function queryObjects(ContextInterface $ctx, QueryObjectsRequest $request): QueryObjectsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.queryObjects', $request);
		return QueryObjectsResponse::fromJson($response);
	}


	public function releaseObject(ContextInterface $ctx, ReleaseObjectRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Runtime.releaseObject', $request);
	}


	public function releaseObjectGroup(ContextInterface $ctx, ReleaseObjectGroupRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Runtime.releaseObjectGroup', $request);
	}


	public function removeBinding(ContextInterface $ctx, RemoveBindingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Runtime.removeBinding', $request);
	}


	public function runIfWaitingForDebugger(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Runtime.runIfWaitingForDebugger', $request);
	}


	public function runScript(ContextInterface $ctx, RunScriptRequest $request): RunScriptResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.runScript', $request);
		return RunScriptResponse::fromJson($response);
	}


	public function setAsyncCallStackDepth(ContextInterface $ctx, SetAsyncCallStackDepthRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Runtime.setAsyncCallStackDepth', $request);
	}


	public function setCustomObjectFormatterEnabled(
		ContextInterface $ctx,
		SetCustomObjectFormatterEnabledRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Runtime.setCustomObjectFormatterEnabled', $request);
	}


	public function setMaxCallStackSizeToCapture(ContextInterface $ctx, SetMaxCallStackSizeToCaptureRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Runtime.setMaxCallStackSizeToCapture', $request);
	}


	public function terminateExecution(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Runtime.terminateExecution', $request);
	}


	public function addBindingCalledListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.bindingCalled', function ($event) use ($listener) {
			return $listener(BindingCalledEvent::fromJson($event));
		});
	}


	public function awaitBindingCalled(ContextInterface $ctx): BindingCalledEvent
	{
		return BindingCalledEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.bindingCalled'));
	}


	public function addConsoleAPICalledListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.consoleAPICalled', function ($event) use ($listener) {
			return $listener(ConsoleAPICalledEvent::fromJson($event));
		});
	}


	public function awaitConsoleAPICalled(ContextInterface $ctx): ConsoleAPICalledEvent
	{
		return ConsoleAPICalledEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.consoleAPICalled'));
	}


	public function addExceptionRevokedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.exceptionRevoked', function ($event) use ($listener) {
			return $listener(ExceptionRevokedEvent::fromJson($event));
		});
	}


	public function awaitExceptionRevoked(ContextInterface $ctx): ExceptionRevokedEvent
	{
		return ExceptionRevokedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.exceptionRevoked'));
	}


	public function addExceptionThrownListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.exceptionThrown', function ($event) use ($listener) {
			return $listener(ExceptionThrownEvent::fromJson($event));
		});
	}


	public function awaitExceptionThrown(ContextInterface $ctx): ExceptionThrownEvent
	{
		return ExceptionThrownEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.exceptionThrown'));
	}


	public function addExecutionContextCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.executionContextCreated', function ($event) use ($listener) {
			return $listener(ExecutionContextCreatedEvent::fromJson($event));
		});
	}


	public function awaitExecutionContextCreated(ContextInterface $ctx): ExecutionContextCreatedEvent
	{
		return ExecutionContextCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.executionContextCreated'));
	}


	public function addExecutionContextDestroyedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.executionContextDestroyed', function ($event) use ($listener) {
			return $listener(ExecutionContextDestroyedEvent::fromJson($event));
		});
	}


	public function awaitExecutionContextDestroyed(ContextInterface $ctx): ExecutionContextDestroyedEvent
	{
		return ExecutionContextDestroyedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.executionContextDestroyed'));
	}


	public function addExecutionContextsClearedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.executionContextsCleared', function ($event) use ($listener) {
			return $listener(ExecutionContextsClearedEvent::fromJson($event));
		});
	}


	public function awaitExecutionContextsCleared(ContextInterface $ctx): ExecutionContextsClearedEvent
	{
		return ExecutionContextsClearedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.executionContextsCleared'));
	}


	public function addInspectRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.inspectRequested', function ($event) use ($listener) {
			return $listener(InspectRequestedEvent::fromJson($event));
		});
	}


	public function awaitInspectRequested(ContextInterface $ctx): InspectRequestedEvent
	{
		return InspectRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.inspectRequested'));
	}
}
