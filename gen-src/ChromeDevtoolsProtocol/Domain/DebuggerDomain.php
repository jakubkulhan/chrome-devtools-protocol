<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Debugger\BreakpointResolvedEvent;
use ChromeDevtoolsProtocol\Model\Debugger\ContinueToLocationRequest;
use ChromeDevtoolsProtocol\Model\Debugger\DisassembleWasmModuleRequest;
use ChromeDevtoolsProtocol\Model\Debugger\DisassembleWasmModuleResponse;
use ChromeDevtoolsProtocol\Model\Debugger\EnableRequest;
use ChromeDevtoolsProtocol\Model\Debugger\EnableResponse;
use ChromeDevtoolsProtocol\Model\Debugger\EvaluateOnCallFrameRequest;
use ChromeDevtoolsProtocol\Model\Debugger\EvaluateOnCallFrameResponse;
use ChromeDevtoolsProtocol\Model\Debugger\GetPossibleBreakpointsRequest;
use ChromeDevtoolsProtocol\Model\Debugger\GetPossibleBreakpointsResponse;
use ChromeDevtoolsProtocol\Model\Debugger\GetScriptSourceRequest;
use ChromeDevtoolsProtocol\Model\Debugger\GetScriptSourceResponse;
use ChromeDevtoolsProtocol\Model\Debugger\GetStackTraceRequest;
use ChromeDevtoolsProtocol\Model\Debugger\GetStackTraceResponse;
use ChromeDevtoolsProtocol\Model\Debugger\GetWasmBytecodeRequest;
use ChromeDevtoolsProtocol\Model\Debugger\GetWasmBytecodeResponse;
use ChromeDevtoolsProtocol\Model\Debugger\NextWasmDisassemblyChunkRequest;
use ChromeDevtoolsProtocol\Model\Debugger\NextWasmDisassemblyChunkResponse;
use ChromeDevtoolsProtocol\Model\Debugger\PauseOnAsyncCallRequest;
use ChromeDevtoolsProtocol\Model\Debugger\PausedEvent;
use ChromeDevtoolsProtocol\Model\Debugger\RemoveBreakpointRequest;
use ChromeDevtoolsProtocol\Model\Debugger\RestartFrameRequest;
use ChromeDevtoolsProtocol\Model\Debugger\RestartFrameResponse;
use ChromeDevtoolsProtocol\Model\Debugger\ResumeRequest;
use ChromeDevtoolsProtocol\Model\Debugger\ResumedEvent;
use ChromeDevtoolsProtocol\Model\Debugger\ScriptFailedToParseEvent;
use ChromeDevtoolsProtocol\Model\Debugger\ScriptParsedEvent;
use ChromeDevtoolsProtocol\Model\Debugger\SearchInContentRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SearchInContentResponse;
use ChromeDevtoolsProtocol\Model\Debugger\SetAsyncCallStackDepthRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetBlackboxPatternsRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetBlackboxedRangesRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointByUrlRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointByUrlResponse;
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointOnFunctionCallRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointOnFunctionCallResponse;
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointResponse;
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointsActiveRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetInstrumentationBreakpointRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetInstrumentationBreakpointResponse;
use ChromeDevtoolsProtocol\Model\Debugger\SetPauseOnExceptionsRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetReturnValueRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetScriptSourceRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetScriptSourceResponse;
use ChromeDevtoolsProtocol\Model\Debugger\SetSkipAllPausesRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetVariableValueRequest;
use ChromeDevtoolsProtocol\Model\Debugger\StepIntoRequest;
use ChromeDevtoolsProtocol\Model\Debugger\StepOverRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class DebuggerDomain implements DebuggerDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function continueToLocation(ContextInterface $ctx, ContinueToLocationRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.continueToLocation', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Debugger.disable', $request);
	}


	public function disassembleWasmModule(
		ContextInterface $ctx,
		DisassembleWasmModuleRequest $request
	): DisassembleWasmModuleResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.disassembleWasmModule', $request);
		return DisassembleWasmModuleResponse::fromJson($response);
	}


	public function enable(ContextInterface $ctx, EnableRequest $request): EnableResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.enable', $request);
		return EnableResponse::fromJson($response);
	}


	public function evaluateOnCallFrame(
		ContextInterface $ctx,
		EvaluateOnCallFrameRequest $request
	): EvaluateOnCallFrameResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.evaluateOnCallFrame', $request);
		return EvaluateOnCallFrameResponse::fromJson($response);
	}


	public function getPossibleBreakpoints(
		ContextInterface $ctx,
		GetPossibleBreakpointsRequest $request
	): GetPossibleBreakpointsResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.getPossibleBreakpoints', $request);
		return GetPossibleBreakpointsResponse::fromJson($response);
	}


	public function getScriptSource(ContextInterface $ctx, GetScriptSourceRequest $request): GetScriptSourceResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.getScriptSource', $request);
		return GetScriptSourceResponse::fromJson($response);
	}


	public function getStackTrace(ContextInterface $ctx, GetStackTraceRequest $request): GetStackTraceResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.getStackTrace', $request);
		return GetStackTraceResponse::fromJson($response);
	}


	public function getWasmBytecode(ContextInterface $ctx, GetWasmBytecodeRequest $request): GetWasmBytecodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.getWasmBytecode', $request);
		return GetWasmBytecodeResponse::fromJson($response);
	}


	public function nextWasmDisassemblyChunk(
		ContextInterface $ctx,
		NextWasmDisassemblyChunkRequest $request
	): NextWasmDisassemblyChunkResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.nextWasmDisassemblyChunk', $request);
		return NextWasmDisassemblyChunkResponse::fromJson($response);
	}


	public function pause(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Debugger.pause', $request);
	}


	public function pauseOnAsyncCall(ContextInterface $ctx, PauseOnAsyncCallRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.pauseOnAsyncCall', $request);
	}


	public function removeBreakpoint(ContextInterface $ctx, RemoveBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.removeBreakpoint', $request);
	}


	public function restartFrame(ContextInterface $ctx, RestartFrameRequest $request): RestartFrameResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.restartFrame', $request);
		return RestartFrameResponse::fromJson($response);
	}


	public function resume(ContextInterface $ctx, ResumeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.resume', $request);
	}


	public function searchInContent(ContextInterface $ctx, SearchInContentRequest $request): SearchInContentResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.searchInContent', $request);
		return SearchInContentResponse::fromJson($response);
	}


	public function setAsyncCallStackDepth(ContextInterface $ctx, SetAsyncCallStackDepthRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.setAsyncCallStackDepth', $request);
	}


	public function setBlackboxedRanges(ContextInterface $ctx, SetBlackboxedRangesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.setBlackboxedRanges', $request);
	}


	public function setBlackboxPatterns(ContextInterface $ctx, SetBlackboxPatternsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.setBlackboxPatterns', $request);
	}


	public function setBreakpoint(ContextInterface $ctx, SetBreakpointRequest $request): SetBreakpointResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.setBreakpoint', $request);
		return SetBreakpointResponse::fromJson($response);
	}


	public function setBreakpointByUrl(
		ContextInterface $ctx,
		SetBreakpointByUrlRequest $request
	): SetBreakpointByUrlResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.setBreakpointByUrl', $request);
		return SetBreakpointByUrlResponse::fromJson($response);
	}


	public function setBreakpointOnFunctionCall(
		ContextInterface $ctx,
		SetBreakpointOnFunctionCallRequest $request
	): SetBreakpointOnFunctionCallResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.setBreakpointOnFunctionCall', $request);
		return SetBreakpointOnFunctionCallResponse::fromJson($response);
	}


	public function setBreakpointsActive(ContextInterface $ctx, SetBreakpointsActiveRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.setBreakpointsActive', $request);
	}


	public function setInstrumentationBreakpoint(
		ContextInterface $ctx,
		SetInstrumentationBreakpointRequest $request
	): SetInstrumentationBreakpointResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.setInstrumentationBreakpoint', $request);
		return SetInstrumentationBreakpointResponse::fromJson($response);
	}


	public function setPauseOnExceptions(ContextInterface $ctx, SetPauseOnExceptionsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.setPauseOnExceptions', $request);
	}


	public function setReturnValue(ContextInterface $ctx, SetReturnValueRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.setReturnValue', $request);
	}


	public function setScriptSource(ContextInterface $ctx, SetScriptSourceRequest $request): SetScriptSourceResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Debugger.setScriptSource', $request);
		return SetScriptSourceResponse::fromJson($response);
	}


	public function setSkipAllPauses(ContextInterface $ctx, SetSkipAllPausesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.setSkipAllPauses', $request);
	}


	public function setVariableValue(ContextInterface $ctx, SetVariableValueRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.setVariableValue', $request);
	}


	public function stepInto(ContextInterface $ctx, StepIntoRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.stepInto', $request);
	}


	public function stepOut(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Debugger.stepOut', $request);
	}


	public function stepOver(ContextInterface $ctx, StepOverRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Debugger.stepOver', $request);
	}


	public function addBreakpointResolvedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Debugger.breakpointResolved', function ($event) use ($listener) {
			return $listener(BreakpointResolvedEvent::fromJson($event));
		});
	}


	public function awaitBreakpointResolved(ContextInterface $ctx): BreakpointResolvedEvent
	{
		return BreakpointResolvedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Debugger.breakpointResolved'));
	}


	public function addPausedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Debugger.paused', function ($event) use ($listener) {
			return $listener(PausedEvent::fromJson($event));
		});
	}


	public function awaitPaused(ContextInterface $ctx): PausedEvent
	{
		return PausedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Debugger.paused'));
	}


	public function addResumedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Debugger.resumed', function ($event) use ($listener) {
			return $listener(ResumedEvent::fromJson($event));
		});
	}


	public function awaitResumed(ContextInterface $ctx): ResumedEvent
	{
		return ResumedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Debugger.resumed'));
	}


	public function addScriptFailedToParseListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Debugger.scriptFailedToParse', function ($event) use ($listener) {
			return $listener(ScriptFailedToParseEvent::fromJson($event));
		});
	}


	public function awaitScriptFailedToParse(ContextInterface $ctx): ScriptFailedToParseEvent
	{
		return ScriptFailedToParseEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Debugger.scriptFailedToParse'));
	}


	public function addScriptParsedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Debugger.scriptParsed', function ($event) use ($listener) {
			return $listener(ScriptParsedEvent::fromJson($event));
		});
	}


	public function awaitScriptParsed(ContextInterface $ctx): ScriptParsedEvent
	{
		return ScriptParsedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Debugger.scriptParsed'));
	}
}
