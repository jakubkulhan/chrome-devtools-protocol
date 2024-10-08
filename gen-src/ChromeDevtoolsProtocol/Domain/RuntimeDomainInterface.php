<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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

/**
 * Runtime domain exposes JavaScript runtime by means of remote evaluation and mirror objects. Evaluation results are returned as mirror object that expose object type, string representation and unique identifier that can be used for further object reference. Original objects are maintained in memory unless they are either explicitly released or are released along with the other objects in their object group.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface RuntimeDomainInterface
{
	/**
	 * If executionContextId is empty, adds binding with the given name on the global objects of all inspected contexts, including those created later, bindings survive reloads. Binding function takes exactly one argument, this argument should be string, in case of any other input, function throws an exception. Each binding function call produces Runtime.bindingCalled notification.
	 *
	 * @param ContextInterface $ctx
	 * @param AddBindingRequest $request
	 *
	 * @return void
	 */
	public function addBinding(ContextInterface $ctx, AddBindingRequest $request): void;


	/**
	 * Add handler to promise with given promise object id.
	 *
	 * @param ContextInterface $ctx
	 * @param AwaitPromiseRequest $request
	 *
	 * @return AwaitPromiseResponse
	 */
	public function awaitPromise(ContextInterface $ctx, AwaitPromiseRequest $request): AwaitPromiseResponse;


	/**
	 * Calls function with given declaration on the given object. Object group of the result is inherited from the target object.
	 *
	 * @param ContextInterface $ctx
	 * @param CallFunctionOnRequest $request
	 *
	 * @return CallFunctionOnResponse
	 */
	public function callFunctionOn(ContextInterface $ctx, CallFunctionOnRequest $request): CallFunctionOnResponse;


	/**
	 * Compiles expression.
	 *
	 * @param ContextInterface $ctx
	 * @param CompileScriptRequest $request
	 *
	 * @return CompileScriptResponse
	 */
	public function compileScript(ContextInterface $ctx, CompileScriptRequest $request): CompileScriptResponse;


	/**
	 * Disables reporting of execution contexts creation.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Discards collected exceptions and console API calls.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function discardConsoleEntries(ContextInterface $ctx): void;


	/**
	 * Enables reporting of execution contexts creation by means of `executionContextCreated` event. When the reporting gets enabled the event will be sent immediately for each existing execution context.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Evaluates expression on global object.
	 *
	 * @param ContextInterface $ctx
	 * @param EvaluateRequest $request
	 *
	 * @return EvaluateResponse
	 */
	public function evaluate(ContextInterface $ctx, EvaluateRequest $request): EvaluateResponse;


	/**
	 * This method tries to lookup and populate exception details for a JavaScript Error object. Note that the stackTrace portion of the resulting exceptionDetails will only be populated if the Runtime domain was enabled at the time when the Error was thrown.
	 *
	 * @param ContextInterface $ctx
	 * @param GetExceptionDetailsRequest $request
	 *
	 * @return GetExceptionDetailsResponse
	 */
	public function getExceptionDetails(
		ContextInterface $ctx,
		GetExceptionDetailsRequest $request
	): GetExceptionDetailsResponse;


	/**
	 * Returns the JavaScript heap usage. It is the total usage of the corresponding isolate not scoped to a particular Runtime.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetHeapUsageResponse
	 */
	public function getHeapUsage(ContextInterface $ctx): GetHeapUsageResponse;


	/**
	 * Returns the isolate id.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetIsolateIdResponse
	 */
	public function getIsolateId(ContextInterface $ctx): GetIsolateIdResponse;


	/**
	 * Returns properties of a given object. Object group of the result is inherited from the target object.
	 *
	 * @param ContextInterface $ctx
	 * @param GetPropertiesRequest $request
	 *
	 * @return GetPropertiesResponse
	 */
	public function getProperties(ContextInterface $ctx, GetPropertiesRequest $request): GetPropertiesResponse;


	/**
	 * Returns all let, const and class variables from global scope.
	 *
	 * @param ContextInterface $ctx
	 * @param GlobalLexicalScopeNamesRequest $request
	 *
	 * @return GlobalLexicalScopeNamesResponse
	 */
	public function globalLexicalScopeNames(
		ContextInterface $ctx,
		GlobalLexicalScopeNamesRequest $request
	): GlobalLexicalScopeNamesResponse;


	/**
	 * Call Runtime.queryObjects command.
	 *
	 * @param ContextInterface $ctx
	 * @param QueryObjectsRequest $request
	 *
	 * @return QueryObjectsResponse
	 */
	public function queryObjects(ContextInterface $ctx, QueryObjectsRequest $request): QueryObjectsResponse;


	/**
	 * Releases remote object with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param ReleaseObjectRequest $request
	 *
	 * @return void
	 */
	public function releaseObject(ContextInterface $ctx, ReleaseObjectRequest $request): void;


	/**
	 * Releases all remote objects that belong to a given group.
	 *
	 * @param ContextInterface $ctx
	 * @param ReleaseObjectGroupRequest $request
	 *
	 * @return void
	 */
	public function releaseObjectGroup(ContextInterface $ctx, ReleaseObjectGroupRequest $request): void;


	/**
	 * This method does not remove binding function from global object but unsubscribes current runtime agent from Runtime.bindingCalled notifications.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveBindingRequest $request
	 *
	 * @return void
	 */
	public function removeBinding(ContextInterface $ctx, RemoveBindingRequest $request): void;


	/**
	 * Tells inspected instance to run if it was waiting for debugger to attach.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function runIfWaitingForDebugger(ContextInterface $ctx): void;


	/**
	 * Runs script with given id in a given context.
	 *
	 * @param ContextInterface $ctx
	 * @param RunScriptRequest $request
	 *
	 * @return RunScriptResponse
	 */
	public function runScript(ContextInterface $ctx, RunScriptRequest $request): RunScriptResponse;


	/**
	 * Enables or disables async call stacks tracking.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAsyncCallStackDepthRequest $request
	 *
	 * @return void
	 */
	public function setAsyncCallStackDepth(ContextInterface $ctx, SetAsyncCallStackDepthRequest $request): void;


	/**
	 * Call Runtime.setCustomObjectFormatterEnabled command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetCustomObjectFormatterEnabledRequest $request
	 *
	 * @return void
	 */
	public function setCustomObjectFormatterEnabled(
		ContextInterface $ctx,
		SetCustomObjectFormatterEnabledRequest $request
	): void;


	/**
	 * Call Runtime.setMaxCallStackSizeToCapture command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetMaxCallStackSizeToCaptureRequest $request
	 *
	 * @return void
	 */
	public function setMaxCallStackSizeToCapture(ContextInterface $ctx, SetMaxCallStackSizeToCaptureRequest $request): void;


	/**
	 * Terminate current or next JavaScript execution. Will cancel the termination when the outer-most script execution ends.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function terminateExecution(ContextInterface $ctx): void;


	/**
	 * Notification is issued every time when binding is called.
	 *
	 * Listener will be called whenever event Runtime.bindingCalled is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addBindingCalledListener(callable $listener): SubscriptionInterface;


	/**
	 * Notification is issued every time when binding is called.
	 *
	 * Method will block until first Runtime.bindingCalled event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return BindingCalledEvent
	 */
	public function awaitBindingCalled(ContextInterface $ctx): BindingCalledEvent;


	/**
	 * Issued when console API was called.
	 *
	 * Listener will be called whenever event Runtime.consoleAPICalled is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addConsoleAPICalledListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when console API was called.
	 *
	 * Method will block until first Runtime.consoleAPICalled event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ConsoleAPICalledEvent
	 */
	public function awaitConsoleAPICalled(ContextInterface $ctx): ConsoleAPICalledEvent;


	/**
	 * Issued when unhandled exception was revoked.
	 *
	 * Listener will be called whenever event Runtime.exceptionRevoked is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addExceptionRevokedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when unhandled exception was revoked.
	 *
	 * Method will block until first Runtime.exceptionRevoked event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ExceptionRevokedEvent
	 */
	public function awaitExceptionRevoked(ContextInterface $ctx): ExceptionRevokedEvent;


	/**
	 * Issued when exception was thrown and unhandled.
	 *
	 * Listener will be called whenever event Runtime.exceptionThrown is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addExceptionThrownListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when exception was thrown and unhandled.
	 *
	 * Method will block until first Runtime.exceptionThrown event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ExceptionThrownEvent
	 */
	public function awaitExceptionThrown(ContextInterface $ctx): ExceptionThrownEvent;


	/**
	 * Issued when new execution context is created.
	 *
	 * Listener will be called whenever event Runtime.executionContextCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addExecutionContextCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when new execution context is created.
	 *
	 * Method will block until first Runtime.executionContextCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ExecutionContextCreatedEvent
	 */
	public function awaitExecutionContextCreated(ContextInterface $ctx): ExecutionContextCreatedEvent;


	/**
	 * Issued when execution context is destroyed.
	 *
	 * Listener will be called whenever event Runtime.executionContextDestroyed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addExecutionContextDestroyedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when execution context is destroyed.
	 *
	 * Method will block until first Runtime.executionContextDestroyed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ExecutionContextDestroyedEvent
	 */
	public function awaitExecutionContextDestroyed(ContextInterface $ctx): ExecutionContextDestroyedEvent;


	/**
	 * Issued when all executionContexts were cleared in browser
	 *
	 * Listener will be called whenever event Runtime.executionContextsCleared is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addExecutionContextsClearedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when all executionContexts were cleared in browser
	 *
	 * Method will block until first Runtime.executionContextsCleared event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ExecutionContextsClearedEvent
	 */
	public function awaitExecutionContextsCleared(ContextInterface $ctx): ExecutionContextsClearedEvent;


	/**
	 * Issued when object should be inspected (for example, as a result of inspect() command line API call).
	 *
	 * Listener will be called whenever event Runtime.inspectRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addInspectRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when object should be inspected (for example, as a result of inspect() command line API call).
	 *
	 * Method will block until first Runtime.inspectRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return InspectRequestedEvent
	 */
	public function awaitInspectRequested(ContextInterface $ctx): InspectRequestedEvent;
}
