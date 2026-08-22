<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Ads\GetAdMetricsResponse;
use ChromeDevtoolsProtocol\Model\Ads\GetAdScriptsResponse;

class AdsDomain implements AdsDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getAdMetrics(ContextInterface $ctx): GetAdMetricsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Ads.getAdMetrics', $request);
		return GetAdMetricsResponse::fromJson($response);
	}


	public function getAdScripts(ContextInterface $ctx): GetAdScriptsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Ads.getAdScripts', $request);
		return GetAdScriptsResponse::fromJson($response);
	}
}
