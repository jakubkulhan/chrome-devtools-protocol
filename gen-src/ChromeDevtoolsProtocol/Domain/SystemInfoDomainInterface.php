<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetFeatureStateRequest;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetFeatureStateResponse;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetInfoResponse;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetProcessInfoResponse;

/**
 * The SystemInfo domain defines methods and events for querying low-level system information.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface SystemInfoDomainInterface
{
	/**
	 * Returns information about the feature state.
	 *
	 * @param ContextInterface $ctx
	 * @param GetFeatureStateRequest $request
	 *
	 * @return GetFeatureStateResponse
	 */
	public function getFeatureState(ContextInterface $ctx, GetFeatureStateRequest $request): GetFeatureStateResponse;


	/**
	 * Returns information about the system.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetInfoResponse
	 */
	public function getInfo(ContextInterface $ctx): GetInfoResponse;


	/**
	 * Returns information about all running processes.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetProcessInfoResponse
	 */
	public function getProcessInfo(ContextInterface $ctx): GetProcessInfoResponse;
}
