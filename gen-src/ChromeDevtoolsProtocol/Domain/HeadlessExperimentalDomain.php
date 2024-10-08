<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameRequest;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameResponse;

class HeadlessExperimentalDomain implements HeadlessExperimentalDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function beginFrame(ContextInterface $ctx, BeginFrameRequest $request): BeginFrameResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'HeadlessExperimental.beginFrame', $request);
		return BeginFrameResponse::fromJson($response);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'HeadlessExperimental.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'HeadlessExperimental.enable', $request);
	}
}
