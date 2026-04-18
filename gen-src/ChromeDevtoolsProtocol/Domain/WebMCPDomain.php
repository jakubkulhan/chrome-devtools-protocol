<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\WebMCP\CancelInvocationRequest;
use ChromeDevtoolsProtocol\Model\WebMCP\InvokeToolRequest;
use ChromeDevtoolsProtocol\Model\WebMCP\InvokeToolResponse;
use ChromeDevtoolsProtocol\Model\WebMCP\ToolInvokedEvent;
use ChromeDevtoolsProtocol\Model\WebMCP\ToolRespondedEvent;
use ChromeDevtoolsProtocol\Model\WebMCP\ToolsAddedEvent;
use ChromeDevtoolsProtocol\Model\WebMCP\ToolsRemovedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class WebMCPDomain implements WebMCPDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function cancelInvocation(ContextInterface $ctx, CancelInvocationRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'WebMCP.cancelInvocation', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'WebMCP.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'WebMCP.enable', $request);
	}


	public function invokeTool(ContextInterface $ctx, InvokeToolRequest $request): InvokeToolResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'WebMCP.invokeTool', $request);
		return InvokeToolResponse::fromJson($response);
	}


	public function addToolInvokedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebMCP.toolInvoked', function ($event) use ($listener) {
			return $listener(ToolInvokedEvent::fromJson($event));
		});
	}


	public function awaitToolInvoked(ContextInterface $ctx): ToolInvokedEvent
	{
		return ToolInvokedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebMCP.toolInvoked'));
	}


	public function addToolRespondedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebMCP.toolResponded', function ($event) use ($listener) {
			return $listener(ToolRespondedEvent::fromJson($event));
		});
	}


	public function awaitToolResponded(ContextInterface $ctx): ToolRespondedEvent
	{
		return ToolRespondedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebMCP.toolResponded'));
	}


	public function addToolsAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebMCP.toolsAdded', function ($event) use ($listener) {
			return $listener(ToolsAddedEvent::fromJson($event));
		});
	}


	public function awaitToolsAdded(ContextInterface $ctx): ToolsAddedEvent
	{
		return ToolsAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebMCP.toolsAdded'));
	}


	public function addToolsRemovedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebMCP.toolsRemoved', function ($event) use ($listener) {
			return $listener(ToolsRemovedEvent::fromJson($event));
		});
	}


	public function awaitToolsRemoved(ContextInterface $ctx): ToolsRemovedEvent
	{
		return ToolsRemovedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebMCP.toolsRemoved'));
	}
}
