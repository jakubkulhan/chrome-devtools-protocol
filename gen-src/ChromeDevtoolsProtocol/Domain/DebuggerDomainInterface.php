<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Debugger\BreakpointResolvedEvent;
use ChromeDevtoolsProtocol\Model\Debugger\ContinueToLocationRequest;
use ChromeDevtoolsProtocol\Model\Debugger\EvaluateOnCallFrameRequest;
use ChromeDevtoolsProtocol\Model\Debugger\EvaluateOnCallFrameResponse;
use ChromeDevtoolsProtocol\Model\Debugger\GetPossibleBreakpointsRequest;
use ChromeDevtoolsProtocol\Model\Debugger\GetPossibleBreakpointsResponse;
use ChromeDevtoolsProtocol\Model\Debugger\GetScriptSourceRequest;
use ChromeDevtoolsProtocol\Model\Debugger\GetScriptSourceResponse;
use ChromeDevtoolsProtocol\Model\Debugger\PauseOnAsyncTaskRequest;
use ChromeDevtoolsProtocol\Model\Debugger\PausedEvent;
use ChromeDevtoolsProtocol\Model\Debugger\RemoveBreakpointRequest;
use ChromeDevtoolsProtocol\Model\Debugger\RestartFrameRequest;
use ChromeDevtoolsProtocol\Model\Debugger\RestartFrameResponse;
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
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointResponse;
use ChromeDevtoolsProtocol\Model\Debugger\SetBreakpointsActiveRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetPauseOnExceptionsRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetReturnValueRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetScriptSourceRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetScriptSourceResponse;
use ChromeDevtoolsProtocol\Model\Debugger\SetSkipAllPausesRequest;
use ChromeDevtoolsProtocol\Model\Debugger\SetVariableValueRequest;
use ChromeDevtoolsProtocol\Model\Debugger\StepIntoRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Debugger domain exposes JavaScript debugging capabilities. It allows setting and removing breakpoints, stepping through execution, exploring stack traces, etc.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DebuggerDomainInterface
{
	/**
	 * Enables debugger for the given page. Clients should not assume that the debugging has been enabled until the result for this command is received.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Disables debugger for given page.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Activates / deactivates all breakpoints on the page.
	 *
	 * @param ContextInterface $ctx
	 * @param SetBreakpointsActiveRequest $request
	 *
	 * @return void
	 */
	public function setBreakpointsActive(ContextInterface $ctx, SetBreakpointsActiveRequest $request): void;


	/**
	 * Makes page not interrupt on any pauses (breakpoint, exception, dom exception etc).
	 *
	 * @param ContextInterface $ctx
	 * @param SetSkipAllPausesRequest $request
	 *
	 * @return void
	 */
	public function setSkipAllPauses(ContextInterface $ctx, SetSkipAllPausesRequest $request): void;


	/**
	 * Sets JavaScript breakpoint at given location specified either by URL or URL regex. Once this command is issued, all existing parsed scripts will have breakpoints resolved and returned in <code>locations</code> property. Further matching script parsing will result in subsequent <code>breakpointResolved</code> events issued. This logical breakpoint will survive page reloads.
	 *
	 * @param ContextInterface $ctx
	 * @param SetBreakpointByUrlRequest $request
	 *
	 * @return SetBreakpointByUrlResponse
	 */
	public function setBreakpointByUrl(ContextInterface $ctx, SetBreakpointByUrlRequest $request): SetBreakpointByUrlResponse;


	/**
	 * Sets JavaScript breakpoint at a given location.
	 *
	 * @param ContextInterface $ctx
	 * @param SetBreakpointRequest $request
	 *
	 * @return SetBreakpointResponse
	 */
	public function setBreakpoint(ContextInterface $ctx, SetBreakpointRequest $request): SetBreakpointResponse;


	/**
	 * Removes JavaScript breakpoint.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveBreakpointRequest $request
	 *
	 * @return void
	 */
	public function removeBreakpoint(ContextInterface $ctx, RemoveBreakpointRequest $request): void;


	/**
	 * Returns possible locations for breakpoint. scriptId in start and end range locations should be the same.
	 *
	 * @param ContextInterface $ctx
	 * @param GetPossibleBreakpointsRequest $request
	 *
	 * @return GetPossibleBreakpointsResponse
	 */
	public function getPossibleBreakpoints(ContextInterface $ctx, GetPossibleBreakpointsRequest $request): GetPossibleBreakpointsResponse;


	/**
	 * Continues execution until specific location is reached.
	 *
	 * @param ContextInterface $ctx
	 * @param ContinueToLocationRequest $request
	 *
	 * @return void
	 */
	public function continueToLocation(ContextInterface $ctx, ContinueToLocationRequest $request): void;


	/**
	 * Call Debugger.pauseOnAsyncTask command.
	 *
	 * @param ContextInterface $ctx
	 * @param PauseOnAsyncTaskRequest $request
	 *
	 * @return void
	 */
	public function pauseOnAsyncTask(ContextInterface $ctx, PauseOnAsyncTaskRequest $request): void;


	/**
	 * Steps over the statement.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function stepOver(ContextInterface $ctx): void;


	/**
	 * Steps into the function call.
	 *
	 * @param ContextInterface $ctx
	 * @param StepIntoRequest $request
	 *
	 * @return void
	 */
	public function stepInto(ContextInterface $ctx, StepIntoRequest $request): void;


	/**
	 * Steps out of the function call.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function stepOut(ContextInterface $ctx): void;


	/**
	 * Stops on the next JavaScript statement.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function pause(ContextInterface $ctx): void;


	/**
	 * This method is deprecated - use Debugger.stepInto with breakOnAsyncCall and Debugger.pauseOnAsyncTask instead. Steps into next scheduled async task if any is scheduled before next pause. Returns success when async task is actually scheduled, returns error if no task were scheduled or another scheduleStepIntoAsync was called.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function scheduleStepIntoAsync(ContextInterface $ctx): void;


	/**
	 * Resumes JavaScript execution.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function resume(ContextInterface $ctx): void;


	/**
	 * Searches for given string in script content.
	 *
	 * @param ContextInterface $ctx
	 * @param SearchInContentRequest $request
	 *
	 * @return SearchInContentResponse
	 */
	public function searchInContent(ContextInterface $ctx, SearchInContentRequest $request): SearchInContentResponse;


	/**
	 * Edits JavaScript source live.
	 *
	 * @param ContextInterface $ctx
	 * @param SetScriptSourceRequest $request
	 *
	 * @return SetScriptSourceResponse
	 */
	public function setScriptSource(ContextInterface $ctx, SetScriptSourceRequest $request): SetScriptSourceResponse;


	/**
	 * Restarts particular call frame from the beginning.
	 *
	 * @param ContextInterface $ctx
	 * @param RestartFrameRequest $request
	 *
	 * @return RestartFrameResponse
	 */
	public function restartFrame(ContextInterface $ctx, RestartFrameRequest $request): RestartFrameResponse;


	/**
	 * Returns source for the script with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param GetScriptSourceRequest $request
	 *
	 * @return GetScriptSourceResponse
	 */
	public function getScriptSource(ContextInterface $ctx, GetScriptSourceRequest $request): GetScriptSourceResponse;


	/**
	 * Defines pause on exceptions state. Can be set to stop on all exceptions, uncaught exceptions or no exceptions. Initial pause on exceptions state is <code>none</code>.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPauseOnExceptionsRequest $request
	 *
	 * @return void
	 */
	public function setPauseOnExceptions(ContextInterface $ctx, SetPauseOnExceptionsRequest $request): void;


	/**
	 * Evaluates expression on a given call frame.
	 *
	 * @param ContextInterface $ctx
	 * @param EvaluateOnCallFrameRequest $request
	 *
	 * @return EvaluateOnCallFrameResponse
	 */
	public function evaluateOnCallFrame(ContextInterface $ctx, EvaluateOnCallFrameRequest $request): EvaluateOnCallFrameResponse;


	/**
	 * Changes value of variable in a callframe. Object-based scopes are not supported and must be mutated manually.
	 *
	 * @param ContextInterface $ctx
	 * @param SetVariableValueRequest $request
	 *
	 * @return void
	 */
	public function setVariableValue(ContextInterface $ctx, SetVariableValueRequest $request): void;


	/**
	 * Changes return value in top frame. Available only at return break position.
	 *
	 * @param ContextInterface $ctx
	 * @param SetReturnValueRequest $request
	 *
	 * @return void
	 */
	public function setReturnValue(ContextInterface $ctx, SetReturnValueRequest $request): void;


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
	 * Replace previous blackbox patterns with passed ones. Forces backend to skip stepping/pausing in scripts with url matching one of the patterns. VM will try to leave blackboxed script by performing 'step in' several times, finally resorting to 'step out' if unsuccessful.
	 *
	 * @param ContextInterface $ctx
	 * @param SetBlackboxPatternsRequest $request
	 *
	 * @return void
	 */
	public function setBlackboxPatterns(ContextInterface $ctx, SetBlackboxPatternsRequest $request): void;


	/**
	 * Makes backend skip steps in the script in blackboxed ranges. VM will try leave blacklisted scripts by performing 'step in' several times, finally resorting to 'step out' if unsuccessful. Positions array contains positions where blackbox state is changed. First interval isn't blackboxed. Array should be sorted.
	 *
	 * @param ContextInterface $ctx
	 * @param SetBlackboxedRangesRequest $request
	 *
	 * @return void
	 */
	public function setBlackboxedRanges(ContextInterface $ctx, SetBlackboxedRangesRequest $request): void;


	/**
	 * Fired when virtual machine parses script. This event is also fired for all known and uncollected scripts upon enabling debugger.
	 *
	 * Listener will be called whenever event Debugger.scriptParsed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addScriptParsedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when virtual machine parses script. This event is also fired for all known and uncollected scripts upon enabling debugger.
	 *
	 * Method will block until first Debugger.scriptParsed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ScriptParsedEvent
	 */
	public function awaitScriptParsed(ContextInterface $ctx): ScriptParsedEvent;


	/**
	 * Fired when virtual machine fails to parse the script.
	 *
	 * Listener will be called whenever event Debugger.scriptFailedToParse is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addScriptFailedToParseListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when virtual machine fails to parse the script.
	 *
	 * Method will block until first Debugger.scriptFailedToParse event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ScriptFailedToParseEvent
	 */
	public function awaitScriptFailedToParse(ContextInterface $ctx): ScriptFailedToParseEvent;


	/**
	 * Fired when breakpoint is resolved to an actual script and location.
	 *
	 * Listener will be called whenever event Debugger.breakpointResolved is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addBreakpointResolvedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when breakpoint is resolved to an actual script and location.
	 *
	 * Method will block until first Debugger.breakpointResolved event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return BreakpointResolvedEvent
	 */
	public function awaitBreakpointResolved(ContextInterface $ctx): BreakpointResolvedEvent;


	/**
	 * Fired when the virtual machine stopped on breakpoint or exception or any other stop criteria.
	 *
	 * Listener will be called whenever event Debugger.paused is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPausedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when the virtual machine stopped on breakpoint or exception or any other stop criteria.
	 *
	 * Method will block until first Debugger.paused event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PausedEvent
	 */
	public function awaitPaused(ContextInterface $ctx): PausedEvent;


	/**
	 * Fired when the virtual machine resumed execution.
	 *
	 * Listener will be called whenever event Debugger.resumed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addResumedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when the virtual machine resumed execution.
	 *
	 * Method will block until first Debugger.resumed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ResumedEvent
	 */
	public function awaitResumed(ContextInterface $ctx): ResumedEvent;
}
