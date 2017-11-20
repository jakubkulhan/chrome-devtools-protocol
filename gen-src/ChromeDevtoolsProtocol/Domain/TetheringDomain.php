<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Tethering\AcceptedEvent;
use ChromeDevtoolsProtocol\Model\Tethering\BindRequest;
use ChromeDevtoolsProtocol\Model\Tethering\UnbindRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class TetheringDomain implements TetheringDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function bind(ContextInterface $ctx, BindRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Tethering.bind', $request);
	}


	public function unbind(ContextInterface $ctx, UnbindRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Tethering.unbind', $request);
	}


	public function addAcceptedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Tethering.accepted', $listener);
	}


	public function awaitAccepted(ContextInterface $ctx): AcceptedEvent
	{
		return AcceptedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Tethering.accepted'));
	}
}
