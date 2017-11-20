<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Runtime\AwaitPromiseRequest;
use ChromeDevtoolsProtocol\Model\Runtime\AwaitPromiseResponse;
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
use ChromeDevtoolsProtocol\Model\Runtime\GetPropertiesRequest;
use ChromeDevtoolsProtocol\Model\Runtime\GetPropertiesResponse;
use ChromeDevtoolsProtocol\Model\Runtime\GlobalLexicalScopeNamesRequest;
use ChromeDevtoolsProtocol\Model\Runtime\GlobalLexicalScopeNamesResponse;
use ChromeDevtoolsProtocol\Model\Runtime\InspectRequestedEvent;
use ChromeDevtoolsProtocol\Model\Runtime\QueryObjectsRequest;
use ChromeDevtoolsProtocol\Model\Runtime\QueryObjectsResponse;
use ChromeDevtoolsProtocol\Model\Runtime\ReleaseObjectGroupRequest;
use ChromeDevtoolsProtocol\Model\Runtime\ReleaseObjectRequest;
use ChromeDevtoolsProtocol\Model\Runtime\RunScriptRequest;
use ChromeDevtoolsProtocol\Model\Runtime\RunScriptResponse;
use ChromeDevtoolsProtocol\Model\Runtime\SetCustomObjectFormatterEnabledRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class RuntimeDomain implements RuntimeDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function evaluate(ContextInterface $ctx, EvaluateRequest $request): EvaluateResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.evaluate', $request);
		return EvaluateResponse::fromJson($response);
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


	public function getProperties(ContextInterface $ctx, GetPropertiesRequest $request): GetPropertiesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.getProperties', $request);
		return GetPropertiesResponse::fromJson($response);
	}


	public function releaseObject(ContextInterface $ctx, ReleaseObjectRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Runtime.releaseObject', $request);
	}


	public function releaseObjectGroup(ContextInterface $ctx, ReleaseObjectGroupRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Runtime.releaseObjectGroup', $request);
	}


	public function runIfWaitingForDebugger(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Runtime.runIfWaitingForDebugger', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Runtime.enable', $request);
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


	public function setCustomObjectFormatterEnabled(ContextInterface $ctx, SetCustomObjectFormatterEnabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Runtime.setCustomObjectFormatterEnabled', $request);
	}


	public function compileScript(ContextInterface $ctx, CompileScriptRequest $request): CompileScriptResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.compileScript', $request);
		return CompileScriptResponse::fromJson($response);
	}


	public function runScript(ContextInterface $ctx, RunScriptRequest $request): RunScriptResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.runScript', $request);
		return RunScriptResponse::fromJson($response);
	}


	public function queryObjects(ContextInterface $ctx, QueryObjectsRequest $request): QueryObjectsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.queryObjects', $request);
		return QueryObjectsResponse::fromJson($response);
	}


	public function globalLexicalScopeNames(ContextInterface $ctx, GlobalLexicalScopeNamesRequest $request): GlobalLexicalScopeNamesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Runtime.globalLexicalScopeNames', $request);
		return GlobalLexicalScopeNamesResponse::fromJson($response);
	}


	public function addExecutionContextCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.executionContextCreated', $listener);
	}


	public function awaitExecutionContextCreated(ContextInterface $ctx): ExecutionContextCreatedEvent
	{
		return ExecutionContextCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.executionContextCreated'));
	}


	public function addExecutionContextDestroyedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.executionContextDestroyed', $listener);
	}


	public function awaitExecutionContextDestroyed(ContextInterface $ctx): ExecutionContextDestroyedEvent
	{
		return ExecutionContextDestroyedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.executionContextDestroyed'));
	}


	public function addExecutionContextsClearedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.executionContextsCleared', $listener);
	}


	public function awaitExecutionContextsCleared(ContextInterface $ctx): ExecutionContextsClearedEvent
	{
		return ExecutionContextsClearedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.executionContextsCleared'));
	}


	public function addExceptionThrownListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.exceptionThrown', $listener);
	}


	public function awaitExceptionThrown(ContextInterface $ctx): ExceptionThrownEvent
	{
		return ExceptionThrownEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.exceptionThrown'));
	}


	public function addExceptionRevokedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.exceptionRevoked', $listener);
	}


	public function awaitExceptionRevoked(ContextInterface $ctx): ExceptionRevokedEvent
	{
		return ExceptionRevokedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.exceptionRevoked'));
	}


	public function addConsoleAPICalledListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.consoleAPICalled', $listener);
	}


	public function awaitConsoleAPICalled(ContextInterface $ctx): ConsoleAPICalledEvent
	{
		return ConsoleAPICalledEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.consoleAPICalled'));
	}


	public function addInspectRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Runtime.inspectRequested', $listener);
	}


	public function awaitInspectRequested(ContextInterface $ctx): InspectRequestedEvent
	{
		return InspectRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Runtime.inspectRequested'));
	}
}
