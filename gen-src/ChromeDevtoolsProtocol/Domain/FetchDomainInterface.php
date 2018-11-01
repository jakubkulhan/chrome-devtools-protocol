<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Fetch\AuthRequiredEvent;
use ChromeDevtoolsProtocol\Model\Fetch\ContinueRequestRequest;
use ChromeDevtoolsProtocol\Model\Fetch\ContinueWithAuthRequest;
use ChromeDevtoolsProtocol\Model\Fetch\EnableRequest;
use ChromeDevtoolsProtocol\Model\Fetch\FailRequestRequest;
use ChromeDevtoolsProtocol\Model\Fetch\FulfillRequestRequest;
use ChromeDevtoolsProtocol\Model\Fetch\GetResponseBodyRequest;
use ChromeDevtoolsProtocol\Model\Fetch\GetResponseBodyResponse;
use ChromeDevtoolsProtocol\Model\Fetch\RequestPausedEvent;
use ChromeDevtoolsProtocol\Model\Fetch\TakeResponseBodyAsStreamRequest;
use ChromeDevtoolsProtocol\Model\Fetch\TakeResponseBodyAsStreamResponse;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * A domain for letting clients substitute browser's network layer with client code.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface FetchDomainInterface
{
	/**
	 * Continues the request, optionally modifying some of its parameters.
	 *
	 * @param ContextInterface $ctx
	 * @param ContinueRequestRequest $request
	 *
	 * @return void
	 */
	public function continueRequest(ContextInterface $ctx, ContinueRequestRequest $request): void;


	/**
	 * Continues a request supplying authChallengeResponse following authRequired event.
	 *
	 * @param ContextInterface $ctx
	 * @param ContinueWithAuthRequest $request
	 *
	 * @return void
	 */
	public function continueWithAuth(ContextInterface $ctx, ContinueWithAuthRequest $request): void;


	/**
	 * Disables the fetch domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables issuing of requestPaused events. A request will be paused until client calls one of failRequest, fulfillRequest or continueRequest/continueWithAuth.
	 *
	 * @param ContextInterface $ctx
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


	/**
	 * Causes the request to fail with specified reason.
	 *
	 * @param ContextInterface $ctx
	 * @param FailRequestRequest $request
	 *
	 * @return void
	 */
	public function failRequest(ContextInterface $ctx, FailRequestRequest $request): void;


	/**
	 * Provides response to the request.
	 *
	 * @param ContextInterface $ctx
	 * @param FulfillRequestRequest $request
	 *
	 * @return void
	 */
	public function fulfillRequest(ContextInterface $ctx, FulfillRequestRequest $request): void;


	/**
	 * Causes the body of the response to be received from the server and returned as a single string. May only be issued for a request that is paused in the Response stage and is mutually exclusive with takeResponseBodyForInterceptionAsStream. Calling other methods that affect the request or disabling fetch domain before body is received results in an undefined behavior.
	 *
	 * @param ContextInterface $ctx
	 * @param GetResponseBodyRequest $request
	 *
	 * @return GetResponseBodyResponse
	 */
	public function getResponseBody(ContextInterface $ctx, GetResponseBodyRequest $request): GetResponseBodyResponse;


	/**
	 * Returns a handle to the stream representing the response body. The request must be paused in the HeadersReceived stage. Note that after this command the request can't be continued as is -- client either needs to cancel it or to provide the response body. The stream only supports sequential read, IO.read will fail if the position is specified. This method is mutually exclusive with getResponseBody. Calling other methods that affect the request or disabling fetch domain before body is received results in an undefined behavior.
	 *
	 * @param ContextInterface $ctx
	 * @param TakeResponseBodyAsStreamRequest $request
	 *
	 * @return TakeResponseBodyAsStreamResponse
	 */
	public function takeResponseBodyAsStream(ContextInterface $ctx, TakeResponseBodyAsStreamRequest $request): TakeResponseBodyAsStreamResponse;


	/**
	 * Issued when the domain is enabled with handleAuthRequests set to true. The request is paused until client responds with continueWithAuth.
	 *
	 * Listener will be called whenever event Fetch.authRequired is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAuthRequiredListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when the domain is enabled with handleAuthRequests set to true. The request is paused until client responds with continueWithAuth.
	 *
	 * Method will block until first Fetch.authRequired event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AuthRequiredEvent
	 */
	public function awaitAuthRequired(ContextInterface $ctx): AuthRequiredEvent;


	/**
	 * Issued when the domain is enabled and the request URL matches the specified filter. The request is paused until the client responds with one of continueRequest, failRequest or fulfillRequest. The stage of the request can be determined by presence of responseErrorReason and responseStatusCode -- the request is at the response stage if either of these fields is present and in the request stage otherwise.
	 *
	 * Listener will be called whenever event Fetch.requestPaused is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addRequestPausedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when the domain is enabled and the request URL matches the specified filter. The request is paused until the client responds with one of continueRequest, failRequest or fulfillRequest. The stage of the request can be determined by presence of responseErrorReason and responseStatusCode -- the request is at the response stage if either of these fields is present and in the request stage otherwise.
	 *
	 * Method will block until first Fetch.requestPaused event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return RequestPausedEvent
	 */
	public function awaitRequestPaused(ContextInterface $ctx): RequestPausedEvent;
}
