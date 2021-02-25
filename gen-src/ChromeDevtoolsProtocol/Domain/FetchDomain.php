<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
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

class FetchDomain implements FetchDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function continueRequest(ContextInterface $ctx, ContinueRequestRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Fetch.continueRequest', $request);
	}


	public function continueWithAuth(ContextInterface $ctx, ContinueWithAuthRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Fetch.continueWithAuth', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Fetch.disable', $request);
	}


	public function enable(ContextInterface $ctx, EnableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Fetch.enable', $request);
	}


	public function failRequest(ContextInterface $ctx, FailRequestRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Fetch.failRequest', $request);
	}


	public function fulfillRequest(ContextInterface $ctx, FulfillRequestRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Fetch.fulfillRequest', $request);
	}


	public function getResponseBody(ContextInterface $ctx, GetResponseBodyRequest $request): GetResponseBodyResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Fetch.getResponseBody', $request);
		return GetResponseBodyResponse::fromJson($response);
	}


	public function takeResponseBodyAsStream(
		ContextInterface $ctx,
		TakeResponseBodyAsStreamRequest $request
	): TakeResponseBodyAsStreamResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Fetch.takeResponseBodyAsStream', $request);
		return TakeResponseBodyAsStreamResponse::fromJson($response);
	}


	public function addAuthRequiredListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Fetch.authRequired', function ($event) use ($listener) {
			return $listener(AuthRequiredEvent::fromJson($event));
		});
	}


	public function awaitAuthRequired(ContextInterface $ctx): AuthRequiredEvent
	{
		return AuthRequiredEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Fetch.authRequired'));
	}


	public function addRequestPausedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Fetch.requestPaused', function ($event) use ($listener) {
			return $listener(RequestPausedEvent::fromJson($event));
		});
	}


	public function awaitRequestPaused(ContextInterface $ctx): RequestPausedEvent
	{
		return RequestPausedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Fetch.requestPaused'));
	}
}
