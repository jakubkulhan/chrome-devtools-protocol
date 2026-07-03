<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\DigitalCredentials\SetVirtualWalletBehaviorRequest;

class DigitalCredentialsDomain implements DigitalCredentialsDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function setVirtualWalletBehavior(ContextInterface $ctx, SetVirtualWalletBehaviorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DigitalCredentials.setVirtualWalletBehavior', $request);
	}
}
