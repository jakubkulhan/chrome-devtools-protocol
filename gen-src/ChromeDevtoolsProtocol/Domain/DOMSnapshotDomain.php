<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\CaptureSnapshotRequest;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\CaptureSnapshotResponse;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\GetSnapshotRequest;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\GetSnapshotResponse;

class DOMSnapshotDomain implements DOMSnapshotDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function captureSnapshot(ContextInterface $ctx, CaptureSnapshotRequest $request): CaptureSnapshotResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOMSnapshot.captureSnapshot', $request);
		return CaptureSnapshotResponse::fromJson($response);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOMSnapshot.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOMSnapshot.enable', $request);
	}


	public function getSnapshot(ContextInterface $ctx, GetSnapshotRequest $request): GetSnapshotResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOMSnapshot.getSnapshot', $request);
		return GetSnapshotResponse::fromJson($response);
	}
}
