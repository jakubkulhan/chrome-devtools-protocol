<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Network\CanClearBrowserCacheResponse;
use ChromeDevtoolsProtocol\Model\Network\CanClearBrowserCookiesResponse;
use ChromeDevtoolsProtocol\Model\Network\CanEmulateNetworkConditionsResponse;
use ChromeDevtoolsProtocol\Model\Network\ContinueInterceptedRequestRequest;
use ChromeDevtoolsProtocol\Model\Network\DataReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\DeleteCookiesRequest;
use ChromeDevtoolsProtocol\Model\Network\DirectTCPSocketAbortedEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectTCPSocketChunkReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectTCPSocketChunkSentEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectTCPSocketClosedEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectTCPSocketCreatedEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectTCPSocketOpenedEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectUDPSocketAbortedEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectUDPSocketChunkReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectUDPSocketChunkSentEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectUDPSocketClosedEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectUDPSocketCreatedEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectUDPSocketJoinedMulticastGroupEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectUDPSocketLeftMulticastGroupEvent;
use ChromeDevtoolsProtocol\Model\Network\DirectUDPSocketOpenedEvent;
use ChromeDevtoolsProtocol\Model\Network\EmulateNetworkConditionsByRuleRequest;
use ChromeDevtoolsProtocol\Model\Network\EmulateNetworkConditionsByRuleResponse;
use ChromeDevtoolsProtocol\Model\Network\EmulateNetworkConditionsRequest;
use ChromeDevtoolsProtocol\Model\Network\EnableReportingApiRequest;
use ChromeDevtoolsProtocol\Model\Network\EnableRequest;
use ChromeDevtoolsProtocol\Model\Network\EventSourceMessageReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\GetAllCookiesResponse;
use ChromeDevtoolsProtocol\Model\Network\GetCertificateRequest;
use ChromeDevtoolsProtocol\Model\Network\GetCertificateResponse;
use ChromeDevtoolsProtocol\Model\Network\GetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Network\GetCookiesResponse;
use ChromeDevtoolsProtocol\Model\Network\GetRequestPostDataRequest;
use ChromeDevtoolsProtocol\Model\Network\GetRequestPostDataResponse;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyForInterceptionRequest;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyForInterceptionResponse;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyRequest;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyResponse;
use ChromeDevtoolsProtocol\Model\Network\GetSecurityIsolationStatusRequest;
use ChromeDevtoolsProtocol\Model\Network\GetSecurityIsolationStatusResponse;
use ChromeDevtoolsProtocol\Model\Network\LoadNetworkResourceRequest;
use ChromeDevtoolsProtocol\Model\Network\LoadNetworkResourceResponse;
use ChromeDevtoolsProtocol\Model\Network\LoadingFailedEvent;
use ChromeDevtoolsProtocol\Model\Network\LoadingFinishedEvent;
use ChromeDevtoolsProtocol\Model\Network\OverrideNetworkStateRequest;
use ChromeDevtoolsProtocol\Model\Network\PolicyUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Network\ReplayXHRRequest;
use ChromeDevtoolsProtocol\Model\Network\ReportingApiEndpointsChangedForOriginEvent;
use ChromeDevtoolsProtocol\Model\Network\ReportingApiReportAddedEvent;
use ChromeDevtoolsProtocol\Model\Network\ReportingApiReportUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Network\RequestInterceptedEvent;
use ChromeDevtoolsProtocol\Model\Network\RequestServedFromCacheEvent;
use ChromeDevtoolsProtocol\Model\Network\RequestWillBeSentEvent;
use ChromeDevtoolsProtocol\Model\Network\RequestWillBeSentExtraInfoEvent;
use ChromeDevtoolsProtocol\Model\Network\ResourceChangedPriorityEvent;
use ChromeDevtoolsProtocol\Model\Network\ResponseReceivedEarlyHintsEvent;
use ChromeDevtoolsProtocol\Model\Network\ResponseReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\ResponseReceivedExtraInfoEvent;
use ChromeDevtoolsProtocol\Model\Network\SearchInResponseBodyRequest;
use ChromeDevtoolsProtocol\Model\Network\SearchInResponseBodyResponse;
use ChromeDevtoolsProtocol\Model\Network\SetAcceptedEncodingsRequest;
use ChromeDevtoolsProtocol\Model\Network\SetAttachDebugStackRequest;
use ChromeDevtoolsProtocol\Model\Network\SetBlockedURLsRequest;
use ChromeDevtoolsProtocol\Model\Network\SetBypassServiceWorkerRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCacheDisabledRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCookieControlsRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCookieRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCookieResponse;
use ChromeDevtoolsProtocol\Model\Network\SetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Network\SetExtraHTTPHeadersRequest;
use ChromeDevtoolsProtocol\Model\Network\SetRequestInterceptionRequest;
use ChromeDevtoolsProtocol\Model\Network\SetUserAgentOverrideRequest;
use ChromeDevtoolsProtocol\Model\Network\SignedExchangeReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\StreamResourceContentRequest;
use ChromeDevtoolsProtocol\Model\Network\StreamResourceContentResponse;
use ChromeDevtoolsProtocol\Model\Network\TakeResponseBodyForInterceptionAsStreamRequest;
use ChromeDevtoolsProtocol\Model\Network\TakeResponseBodyForInterceptionAsStreamResponse;
use ChromeDevtoolsProtocol\Model\Network\TrustTokenOperationDoneEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketClosedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketCreatedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketFrameErrorEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketFrameReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketFrameSentEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketHandshakeResponseReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketWillSendHandshakeRequestEvent;
use ChromeDevtoolsProtocol\Model\Network\WebTransportClosedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebTransportConnectionEstablishedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebTransportCreatedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class NetworkDomain implements NetworkDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function canClearBrowserCache(ContextInterface $ctx): CanClearBrowserCacheResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Network.canClearBrowserCache', $request);
		return CanClearBrowserCacheResponse::fromJson($response);
	}


	public function canClearBrowserCookies(ContextInterface $ctx): CanClearBrowserCookiesResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Network.canClearBrowserCookies', $request);
		return CanClearBrowserCookiesResponse::fromJson($response);
	}


	public function canEmulateNetworkConditions(ContextInterface $ctx): CanEmulateNetworkConditionsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Network.canEmulateNetworkConditions', $request);
		return CanEmulateNetworkConditionsResponse::fromJson($response);
	}


	public function clearAcceptedEncodingsOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Network.clearAcceptedEncodingsOverride', $request);
	}


	public function clearBrowserCache(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Network.clearBrowserCache', $request);
	}


	public function clearBrowserCookies(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Network.clearBrowserCookies', $request);
	}


	public function continueInterceptedRequest(ContextInterface $ctx, ContinueInterceptedRequestRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.continueInterceptedRequest', $request);
	}


	public function deleteCookies(ContextInterface $ctx, DeleteCookiesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.deleteCookies', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Network.disable', $request);
	}


	public function emulateNetworkConditions(ContextInterface $ctx, EmulateNetworkConditionsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.emulateNetworkConditions', $request);
	}


	public function emulateNetworkConditionsByRule(
		ContextInterface $ctx,
		EmulateNetworkConditionsByRuleRequest $request
	): EmulateNetworkConditionsByRuleResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Network.emulateNetworkConditionsByRule', $request);
		return EmulateNetworkConditionsByRuleResponse::fromJson($response);
	}


	public function enable(ContextInterface $ctx, EnableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.enable', $request);
	}


	public function enableReportingApi(ContextInterface $ctx, EnableReportingApiRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.enableReportingApi', $request);
	}


	public function getAllCookies(ContextInterface $ctx): GetAllCookiesResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Network.getAllCookies', $request);
		return GetAllCookiesResponse::fromJson($response);
	}


	public function getCertificate(ContextInterface $ctx, GetCertificateRequest $request): GetCertificateResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Network.getCertificate', $request);
		return GetCertificateResponse::fromJson($response);
	}


	public function getCookies(ContextInterface $ctx, GetCookiesRequest $request): GetCookiesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Network.getCookies', $request);
		return GetCookiesResponse::fromJson($response);
	}


	public function getRequestPostData(
		ContextInterface $ctx,
		GetRequestPostDataRequest $request
	): GetRequestPostDataResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Network.getRequestPostData', $request);
		return GetRequestPostDataResponse::fromJson($response);
	}


	public function getResponseBody(ContextInterface $ctx, GetResponseBodyRequest $request): GetResponseBodyResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Network.getResponseBody', $request);
		return GetResponseBodyResponse::fromJson($response);
	}


	public function getResponseBodyForInterception(
		ContextInterface $ctx,
		GetResponseBodyForInterceptionRequest $request
	): GetResponseBodyForInterceptionResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Network.getResponseBodyForInterception', $request);
		return GetResponseBodyForInterceptionResponse::fromJson($response);
	}


	public function getSecurityIsolationStatus(
		ContextInterface $ctx,
		GetSecurityIsolationStatusRequest $request
	): GetSecurityIsolationStatusResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Network.getSecurityIsolationStatus', $request);
		return GetSecurityIsolationStatusResponse::fromJson($response);
	}


	public function loadNetworkResource(
		ContextInterface $ctx,
		LoadNetworkResourceRequest $request
	): LoadNetworkResourceResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Network.loadNetworkResource', $request);
		return LoadNetworkResourceResponse::fromJson($response);
	}


	public function overrideNetworkState(ContextInterface $ctx, OverrideNetworkStateRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.overrideNetworkState', $request);
	}


	public function replayXHR(ContextInterface $ctx, ReplayXHRRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.replayXHR', $request);
	}


	public function searchInResponseBody(
		ContextInterface $ctx,
		SearchInResponseBodyRequest $request
	): SearchInResponseBodyResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Network.searchInResponseBody', $request);
		return SearchInResponseBodyResponse::fromJson($response);
	}


	public function setAcceptedEncodings(ContextInterface $ctx, SetAcceptedEncodingsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setAcceptedEncodings', $request);
	}


	public function setAttachDebugStack(ContextInterface $ctx, SetAttachDebugStackRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setAttachDebugStack', $request);
	}


	public function setBlockedURLs(ContextInterface $ctx, SetBlockedURLsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setBlockedURLs', $request);
	}


	public function setBypassServiceWorker(ContextInterface $ctx, SetBypassServiceWorkerRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setBypassServiceWorker', $request);
	}


	public function setCacheDisabled(ContextInterface $ctx, SetCacheDisabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setCacheDisabled', $request);
	}


	public function setCookie(ContextInterface $ctx, SetCookieRequest $request): SetCookieResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Network.setCookie', $request);
		return SetCookieResponse::fromJson($response);
	}


	public function setCookieControls(ContextInterface $ctx, SetCookieControlsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setCookieControls', $request);
	}


	public function setCookies(ContextInterface $ctx, SetCookiesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setCookies', $request);
	}


	public function setExtraHTTPHeaders(ContextInterface $ctx, SetExtraHTTPHeadersRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setExtraHTTPHeaders', $request);
	}


	public function setRequestInterception(ContextInterface $ctx, SetRequestInterceptionRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setRequestInterception', $request);
	}


	public function setUserAgentOverride(ContextInterface $ctx, SetUserAgentOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setUserAgentOverride', $request);
	}


	public function streamResourceContent(
		ContextInterface $ctx,
		StreamResourceContentRequest $request
	): StreamResourceContentResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Network.streamResourceContent', $request);
		return StreamResourceContentResponse::fromJson($response);
	}


	public function takeResponseBodyForInterceptionAsStream(
		ContextInterface $ctx,
		TakeResponseBodyForInterceptionAsStreamRequest $request
	): TakeResponseBodyForInterceptionAsStreamResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Network.takeResponseBodyForInterceptionAsStream', $request);
		return TakeResponseBodyForInterceptionAsStreamResponse::fromJson($response);
	}


	public function addDataReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.dataReceived', function ($event) use ($listener) {
			return $listener(DataReceivedEvent::fromJson($event));
		});
	}


	public function awaitDataReceived(ContextInterface $ctx): DataReceivedEvent
	{
		return DataReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.dataReceived'));
	}


	public function addDirectTCPSocketAbortedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directTCPSocketAborted', function ($event) use ($listener) {
			return $listener(DirectTCPSocketAbortedEvent::fromJson($event));
		});
	}


	public function awaitDirectTCPSocketAborted(ContextInterface $ctx): DirectTCPSocketAbortedEvent
	{
		return DirectTCPSocketAbortedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directTCPSocketAborted'));
	}


	public function addDirectTCPSocketChunkReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directTCPSocketChunkReceived', function ($event) use ($listener) {
			return $listener(DirectTCPSocketChunkReceivedEvent::fromJson($event));
		});
	}


	public function awaitDirectTCPSocketChunkReceived(ContextInterface $ctx): DirectTCPSocketChunkReceivedEvent
	{
		return DirectTCPSocketChunkReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directTCPSocketChunkReceived'));
	}


	public function addDirectTCPSocketChunkSentListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directTCPSocketChunkSent', function ($event) use ($listener) {
			return $listener(DirectTCPSocketChunkSentEvent::fromJson($event));
		});
	}


	public function awaitDirectTCPSocketChunkSent(ContextInterface $ctx): DirectTCPSocketChunkSentEvent
	{
		return DirectTCPSocketChunkSentEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directTCPSocketChunkSent'));
	}


	public function addDirectTCPSocketClosedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directTCPSocketClosed', function ($event) use ($listener) {
			return $listener(DirectTCPSocketClosedEvent::fromJson($event));
		});
	}


	public function awaitDirectTCPSocketClosed(ContextInterface $ctx): DirectTCPSocketClosedEvent
	{
		return DirectTCPSocketClosedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directTCPSocketClosed'));
	}


	public function addDirectTCPSocketCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directTCPSocketCreated', function ($event) use ($listener) {
			return $listener(DirectTCPSocketCreatedEvent::fromJson($event));
		});
	}


	public function awaitDirectTCPSocketCreated(ContextInterface $ctx): DirectTCPSocketCreatedEvent
	{
		return DirectTCPSocketCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directTCPSocketCreated'));
	}


	public function addDirectTCPSocketOpenedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directTCPSocketOpened', function ($event) use ($listener) {
			return $listener(DirectTCPSocketOpenedEvent::fromJson($event));
		});
	}


	public function awaitDirectTCPSocketOpened(ContextInterface $ctx): DirectTCPSocketOpenedEvent
	{
		return DirectTCPSocketOpenedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directTCPSocketOpened'));
	}


	public function addDirectUDPSocketAbortedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directUDPSocketAborted', function ($event) use ($listener) {
			return $listener(DirectUDPSocketAbortedEvent::fromJson($event));
		});
	}


	public function awaitDirectUDPSocketAborted(ContextInterface $ctx): DirectUDPSocketAbortedEvent
	{
		return DirectUDPSocketAbortedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directUDPSocketAborted'));
	}


	public function addDirectUDPSocketChunkReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directUDPSocketChunkReceived', function ($event) use ($listener) {
			return $listener(DirectUDPSocketChunkReceivedEvent::fromJson($event));
		});
	}


	public function awaitDirectUDPSocketChunkReceived(ContextInterface $ctx): DirectUDPSocketChunkReceivedEvent
	{
		return DirectUDPSocketChunkReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directUDPSocketChunkReceived'));
	}


	public function addDirectUDPSocketChunkSentListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directUDPSocketChunkSent', function ($event) use ($listener) {
			return $listener(DirectUDPSocketChunkSentEvent::fromJson($event));
		});
	}


	public function awaitDirectUDPSocketChunkSent(ContextInterface $ctx): DirectUDPSocketChunkSentEvent
	{
		return DirectUDPSocketChunkSentEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directUDPSocketChunkSent'));
	}


	public function addDirectUDPSocketClosedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directUDPSocketClosed', function ($event) use ($listener) {
			return $listener(DirectUDPSocketClosedEvent::fromJson($event));
		});
	}


	public function awaitDirectUDPSocketClosed(ContextInterface $ctx): DirectUDPSocketClosedEvent
	{
		return DirectUDPSocketClosedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directUDPSocketClosed'));
	}


	public function addDirectUDPSocketCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directUDPSocketCreated', function ($event) use ($listener) {
			return $listener(DirectUDPSocketCreatedEvent::fromJson($event));
		});
	}


	public function awaitDirectUDPSocketCreated(ContextInterface $ctx): DirectUDPSocketCreatedEvent
	{
		return DirectUDPSocketCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directUDPSocketCreated'));
	}


	public function addDirectUDPSocketJoinedMulticastGroupListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directUDPSocketJoinedMulticastGroup', function ($event) use ($listener) {
			return $listener(DirectUDPSocketJoinedMulticastGroupEvent::fromJson($event));
		});
	}


	public function awaitDirectUDPSocketJoinedMulticastGroup(ContextInterface $ctx): DirectUDPSocketJoinedMulticastGroupEvent
	{
		return DirectUDPSocketJoinedMulticastGroupEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directUDPSocketJoinedMulticastGroup'));
	}


	public function addDirectUDPSocketLeftMulticastGroupListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directUDPSocketLeftMulticastGroup', function ($event) use ($listener) {
			return $listener(DirectUDPSocketLeftMulticastGroupEvent::fromJson($event));
		});
	}


	public function awaitDirectUDPSocketLeftMulticastGroup(ContextInterface $ctx): DirectUDPSocketLeftMulticastGroupEvent
	{
		return DirectUDPSocketLeftMulticastGroupEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directUDPSocketLeftMulticastGroup'));
	}


	public function addDirectUDPSocketOpenedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.directUDPSocketOpened', function ($event) use ($listener) {
			return $listener(DirectUDPSocketOpenedEvent::fromJson($event));
		});
	}


	public function awaitDirectUDPSocketOpened(ContextInterface $ctx): DirectUDPSocketOpenedEvent
	{
		return DirectUDPSocketOpenedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.directUDPSocketOpened'));
	}


	public function addEventSourceMessageReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.eventSourceMessageReceived', function ($event) use ($listener) {
			return $listener(EventSourceMessageReceivedEvent::fromJson($event));
		});
	}


	public function awaitEventSourceMessageReceived(ContextInterface $ctx): EventSourceMessageReceivedEvent
	{
		return EventSourceMessageReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.eventSourceMessageReceived'));
	}


	public function addLoadingFailedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.loadingFailed', function ($event) use ($listener) {
			return $listener(LoadingFailedEvent::fromJson($event));
		});
	}


	public function awaitLoadingFailed(ContextInterface $ctx): LoadingFailedEvent
	{
		return LoadingFailedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.loadingFailed'));
	}


	public function addLoadingFinishedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.loadingFinished', function ($event) use ($listener) {
			return $listener(LoadingFinishedEvent::fromJson($event));
		});
	}


	public function awaitLoadingFinished(ContextInterface $ctx): LoadingFinishedEvent
	{
		return LoadingFinishedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.loadingFinished'));
	}


	public function addPolicyUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.policyUpdated', function ($event) use ($listener) {
			return $listener(PolicyUpdatedEvent::fromJson($event));
		});
	}


	public function awaitPolicyUpdated(ContextInterface $ctx): PolicyUpdatedEvent
	{
		return PolicyUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.policyUpdated'));
	}


	public function addReportingApiEndpointsChangedForOriginListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.reportingApiEndpointsChangedForOrigin', function ($event) use ($listener) {
			return $listener(ReportingApiEndpointsChangedForOriginEvent::fromJson($event));
		});
	}


	public function awaitReportingApiEndpointsChangedForOrigin(ContextInterface $ctx): ReportingApiEndpointsChangedForOriginEvent
	{
		return ReportingApiEndpointsChangedForOriginEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.reportingApiEndpointsChangedForOrigin'));
	}


	public function addReportingApiReportAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.reportingApiReportAdded', function ($event) use ($listener) {
			return $listener(ReportingApiReportAddedEvent::fromJson($event));
		});
	}


	public function awaitReportingApiReportAdded(ContextInterface $ctx): ReportingApiReportAddedEvent
	{
		return ReportingApiReportAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.reportingApiReportAdded'));
	}


	public function addReportingApiReportUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.reportingApiReportUpdated', function ($event) use ($listener) {
			return $listener(ReportingApiReportUpdatedEvent::fromJson($event));
		});
	}


	public function awaitReportingApiReportUpdated(ContextInterface $ctx): ReportingApiReportUpdatedEvent
	{
		return ReportingApiReportUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.reportingApiReportUpdated'));
	}


	public function addRequestInterceptedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.requestIntercepted', function ($event) use ($listener) {
			return $listener(RequestInterceptedEvent::fromJson($event));
		});
	}


	public function awaitRequestIntercepted(ContextInterface $ctx): RequestInterceptedEvent
	{
		return RequestInterceptedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.requestIntercepted'));
	}


	public function addRequestServedFromCacheListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.requestServedFromCache', function ($event) use ($listener) {
			return $listener(RequestServedFromCacheEvent::fromJson($event));
		});
	}


	public function awaitRequestServedFromCache(ContextInterface $ctx): RequestServedFromCacheEvent
	{
		return RequestServedFromCacheEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.requestServedFromCache'));
	}


	public function addRequestWillBeSentListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.requestWillBeSent', function ($event) use ($listener) {
			return $listener(RequestWillBeSentEvent::fromJson($event));
		});
	}


	public function awaitRequestWillBeSent(ContextInterface $ctx): RequestWillBeSentEvent
	{
		return RequestWillBeSentEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.requestWillBeSent'));
	}


	public function addRequestWillBeSentExtraInfoListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.requestWillBeSentExtraInfo', function ($event) use ($listener) {
			return $listener(RequestWillBeSentExtraInfoEvent::fromJson($event));
		});
	}


	public function awaitRequestWillBeSentExtraInfo(ContextInterface $ctx): RequestWillBeSentExtraInfoEvent
	{
		return RequestWillBeSentExtraInfoEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.requestWillBeSentExtraInfo'));
	}


	public function addResourceChangedPriorityListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.resourceChangedPriority', function ($event) use ($listener) {
			return $listener(ResourceChangedPriorityEvent::fromJson($event));
		});
	}


	public function awaitResourceChangedPriority(ContextInterface $ctx): ResourceChangedPriorityEvent
	{
		return ResourceChangedPriorityEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.resourceChangedPriority'));
	}


	public function addResponseReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.responseReceived', function ($event) use ($listener) {
			return $listener(ResponseReceivedEvent::fromJson($event));
		});
	}


	public function awaitResponseReceived(ContextInterface $ctx): ResponseReceivedEvent
	{
		return ResponseReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.responseReceived'));
	}


	public function addResponseReceivedEarlyHintsListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.responseReceivedEarlyHints', function ($event) use ($listener) {
			return $listener(ResponseReceivedEarlyHintsEvent::fromJson($event));
		});
	}


	public function awaitResponseReceivedEarlyHints(ContextInterface $ctx): ResponseReceivedEarlyHintsEvent
	{
		return ResponseReceivedEarlyHintsEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.responseReceivedEarlyHints'));
	}


	public function addResponseReceivedExtraInfoListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.responseReceivedExtraInfo', function ($event) use ($listener) {
			return $listener(ResponseReceivedExtraInfoEvent::fromJson($event));
		});
	}


	public function awaitResponseReceivedExtraInfo(ContextInterface $ctx): ResponseReceivedExtraInfoEvent
	{
		return ResponseReceivedExtraInfoEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.responseReceivedExtraInfo'));
	}


	public function addSignedExchangeReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.signedExchangeReceived', function ($event) use ($listener) {
			return $listener(SignedExchangeReceivedEvent::fromJson($event));
		});
	}


	public function awaitSignedExchangeReceived(ContextInterface $ctx): SignedExchangeReceivedEvent
	{
		return SignedExchangeReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.signedExchangeReceived'));
	}


	public function addTrustTokenOperationDoneListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.trustTokenOperationDone', function ($event) use ($listener) {
			return $listener(TrustTokenOperationDoneEvent::fromJson($event));
		});
	}


	public function awaitTrustTokenOperationDone(ContextInterface $ctx): TrustTokenOperationDoneEvent
	{
		return TrustTokenOperationDoneEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.trustTokenOperationDone'));
	}


	public function addWebSocketClosedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webSocketClosed', function ($event) use ($listener) {
			return $listener(WebSocketClosedEvent::fromJson($event));
		});
	}


	public function awaitWebSocketClosed(ContextInterface $ctx): WebSocketClosedEvent
	{
		return WebSocketClosedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webSocketClosed'));
	}


	public function addWebSocketCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webSocketCreated', function ($event) use ($listener) {
			return $listener(WebSocketCreatedEvent::fromJson($event));
		});
	}


	public function awaitWebSocketCreated(ContextInterface $ctx): WebSocketCreatedEvent
	{
		return WebSocketCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webSocketCreated'));
	}


	public function addWebSocketFrameErrorListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webSocketFrameError', function ($event) use ($listener) {
			return $listener(WebSocketFrameErrorEvent::fromJson($event));
		});
	}


	public function awaitWebSocketFrameError(ContextInterface $ctx): WebSocketFrameErrorEvent
	{
		return WebSocketFrameErrorEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webSocketFrameError'));
	}


	public function addWebSocketFrameReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webSocketFrameReceived', function ($event) use ($listener) {
			return $listener(WebSocketFrameReceivedEvent::fromJson($event));
		});
	}


	public function awaitWebSocketFrameReceived(ContextInterface $ctx): WebSocketFrameReceivedEvent
	{
		return WebSocketFrameReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webSocketFrameReceived'));
	}


	public function addWebSocketFrameSentListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webSocketFrameSent', function ($event) use ($listener) {
			return $listener(WebSocketFrameSentEvent::fromJson($event));
		});
	}


	public function awaitWebSocketFrameSent(ContextInterface $ctx): WebSocketFrameSentEvent
	{
		return WebSocketFrameSentEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webSocketFrameSent'));
	}


	public function addWebSocketHandshakeResponseReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webSocketHandshakeResponseReceived', function ($event) use ($listener) {
			return $listener(WebSocketHandshakeResponseReceivedEvent::fromJson($event));
		});
	}


	public function awaitWebSocketHandshakeResponseReceived(ContextInterface $ctx): WebSocketHandshakeResponseReceivedEvent
	{
		return WebSocketHandshakeResponseReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webSocketHandshakeResponseReceived'));
	}


	public function addWebSocketWillSendHandshakeRequestListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webSocketWillSendHandshakeRequest', function ($event) use ($listener) {
			return $listener(WebSocketWillSendHandshakeRequestEvent::fromJson($event));
		});
	}


	public function awaitWebSocketWillSendHandshakeRequest(ContextInterface $ctx): WebSocketWillSendHandshakeRequestEvent
	{
		return WebSocketWillSendHandshakeRequestEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webSocketWillSendHandshakeRequest'));
	}


	public function addWebTransportClosedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webTransportClosed', function ($event) use ($listener) {
			return $listener(WebTransportClosedEvent::fromJson($event));
		});
	}


	public function awaitWebTransportClosed(ContextInterface $ctx): WebTransportClosedEvent
	{
		return WebTransportClosedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webTransportClosed'));
	}


	public function addWebTransportConnectionEstablishedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webTransportConnectionEstablished', function ($event) use ($listener) {
			return $listener(WebTransportConnectionEstablishedEvent::fromJson($event));
		});
	}


	public function awaitWebTransportConnectionEstablished(ContextInterface $ctx): WebTransportConnectionEstablishedEvent
	{
		return WebTransportConnectionEstablishedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webTransportConnectionEstablished'));
	}


	public function addWebTransportCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Network.webTransportCreated', function ($event) use ($listener) {
			return $listener(WebTransportCreatedEvent::fromJson($event));
		});
	}


	public function awaitWebTransportCreated(ContextInterface $ctx): WebTransportCreatedEvent
	{
		return WebTransportCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Network.webTransportCreated'));
	}
}
