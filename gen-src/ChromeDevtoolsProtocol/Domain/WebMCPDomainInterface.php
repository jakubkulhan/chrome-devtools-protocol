<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\WebMCP\ToolInvokedEvent;
use ChromeDevtoolsProtocol\Model\WebMCP\ToolRespondedEvent;
use ChromeDevtoolsProtocol\Model\WebMCP\ToolsAddedEvent;
use ChromeDevtoolsProtocol\Model\WebMCP\ToolsRemovedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * WebMCP domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface WebMCPDomainInterface
{
	/**
	 * Disables the WebMCP domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables the WebMCP domain, allowing events to be sent. Enabling the domain will trigger a toolsAdded event for all currently registered tools.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Event fired when a tool invocation starts.
	 *
	 * Listener will be called whenever event WebMCP.toolInvoked is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addToolInvokedListener(callable $listener): SubscriptionInterface;


	/**
	 * Event fired when a tool invocation starts.
	 *
	 * Method will block until first WebMCP.toolInvoked event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ToolInvokedEvent
	 */
	public function awaitToolInvoked(ContextInterface $ctx): ToolInvokedEvent;


	/**
	 * Event fired when a tool invocation completes or fails.
	 *
	 * Listener will be called whenever event WebMCP.toolResponded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addToolRespondedListener(callable $listener): SubscriptionInterface;


	/**
	 * Event fired when a tool invocation completes or fails.
	 *
	 * Method will block until first WebMCP.toolResponded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ToolRespondedEvent
	 */
	public function awaitToolResponded(ContextInterface $ctx): ToolRespondedEvent;


	/**
	 * Event fired when new tools are added.
	 *
	 * Listener will be called whenever event WebMCP.toolsAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addToolsAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Event fired when new tools are added.
	 *
	 * Method will block until first WebMCP.toolsAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ToolsAddedEvent
	 */
	public function awaitToolsAdded(ContextInterface $ctx): ToolsAddedEvent;


	/**
	 * Event fired when tools are removed.
	 *
	 * Listener will be called whenever event WebMCP.toolsRemoved is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addToolsRemovedListener(callable $listener): SubscriptionInterface;


	/**
	 * Event fired when tools are removed.
	 *
	 * Method will block until first WebMCP.toolsRemoved event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ToolsRemovedEvent
	 */
	public function awaitToolsRemoved(ContextInterface $ctx): ToolsRemovedEvent;
}
