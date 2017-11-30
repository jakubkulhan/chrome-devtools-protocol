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
use ChromeDevtoolsProtocol\Model\Network\EmulateNetworkConditionsRequest;
use ChromeDevtoolsProtocol\Model\Network\EnableRequest;
use ChromeDevtoolsProtocol\Model\Network\EventSourceMessageReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\GetAllCookiesResponse;
use ChromeDevtoolsProtocol\Model\Network\GetCertificateRequest;
use ChromeDevtoolsProtocol\Model\Network\GetCertificateResponse;
use ChromeDevtoolsProtocol\Model\Network\GetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Network\GetCookiesResponse;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyForInterceptionRequest;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyForInterceptionResponse;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyRequest;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyResponse;
use ChromeDevtoolsProtocol\Model\Network\LoadingFailedEvent;
use ChromeDevtoolsProtocol\Model\Network\LoadingFinishedEvent;
use ChromeDevtoolsProtocol\Model\Network\ReplayXHRRequest;
use ChromeDevtoolsProtocol\Model\Network\RequestInterceptedEvent;
use ChromeDevtoolsProtocol\Model\Network\RequestServedFromCacheEvent;
use ChromeDevtoolsProtocol\Model\Network\RequestWillBeSentEvent;
use ChromeDevtoolsProtocol\Model\Network\ResourceChangedPriorityEvent;
use ChromeDevtoolsProtocol\Model\Network\ResponseReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\SearchInResponseBodyRequest;
use ChromeDevtoolsProtocol\Model\Network\SearchInResponseBodyResponse;
use ChromeDevtoolsProtocol\Model\Network\SetBlockedURLsRequest;
use ChromeDevtoolsProtocol\Model\Network\SetBypassServiceWorkerRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCacheDisabledRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCookieRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCookieResponse;
use ChromeDevtoolsProtocol\Model\Network\SetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Network\SetDataSizeLimitsForTestRequest;
use ChromeDevtoolsProtocol\Model\Network\SetExtraHTTPHeadersRequest;
use ChromeDevtoolsProtocol\Model\Network\SetRequestInterceptionRequest;
use ChromeDevtoolsProtocol\Model\Network\SetUserAgentOverrideRequest;
use ChromeDevtoolsProtocol\Model\Network\WebSocketClosedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketCreatedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketFrameErrorEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketFrameReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketFrameSentEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketHandshakeResponseReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketWillSendHandshakeRequestEvent;
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


	public function enable(ContextInterface $ctx, EnableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.enable', $request);
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


	public function getResponseBody(ContextInterface $ctx, GetResponseBodyRequest $request): GetResponseBodyResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Network.getResponseBody', $request);
		return GetResponseBodyResponse::fromJson($response);
	}


	public function getResponseBodyForInterception(ContextInterface $ctx, GetResponseBodyForInterceptionRequest $request): GetResponseBodyForInterceptionResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Network.getResponseBodyForInterception', $request);
		return GetResponseBodyForInterceptionResponse::fromJson($response);
	}


	public function replayXHR(ContextInterface $ctx, ReplayXHRRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.replayXHR', $request);
	}


	public function searchInResponseBody(ContextInterface $ctx, SearchInResponseBodyRequest $request): SearchInResponseBodyResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Network.searchInResponseBody', $request);
		return SearchInResponseBodyResponse::fromJson($response);
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


	public function setCookies(ContextInterface $ctx, SetCookiesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setCookies', $request);
	}


	public function setDataSizeLimitsForTest(ContextInterface $ctx, SetDataSizeLimitsForTestRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Network.setDataSizeLimitsForTest', $request);
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
}
