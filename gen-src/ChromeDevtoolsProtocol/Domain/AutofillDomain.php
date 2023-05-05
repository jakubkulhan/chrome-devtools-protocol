<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Autofill\TriggerRequest;

class AutofillDomain implements AutofillDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function trigger(ContextInterface $ctx, TriggerRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Autofill.trigger', $request);
	}
}
