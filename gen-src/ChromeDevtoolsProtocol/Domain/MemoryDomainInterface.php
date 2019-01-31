<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Memory\GetAllTimeSamplingProfileResponse;
use ChromeDevtoolsProtocol\Model\Memory\GetBrowserSamplingProfileResponse;
use ChromeDevtoolsProtocol\Model\Memory\GetDOMCountersResponse;
use ChromeDevtoolsProtocol\Model\Memory\GetSamplingProfileResponse;
use ChromeDevtoolsProtocol\Model\Memory\SetPressureNotificationsSuppressedRequest;
use ChromeDevtoolsProtocol\Model\Memory\SimulatePressureNotificationRequest;
use ChromeDevtoolsProtocol\Model\Memory\StartSamplingRequest;

/**
 * Memory domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface MemoryDomainInterface
{
	/**
	 * Simulate OomIntervention by purging V8 memory.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function forciblyPurgeJavaScriptMemory(ContextInterface $ctx): void;


	/**
	 * Retrieve native memory allocations profile collected since renderer process startup.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetAllTimeSamplingProfileResponse
	 */
	public function getAllTimeSamplingProfile(ContextInterface $ctx): GetAllTimeSamplingProfileResponse;


	/**
	 * Retrieve native memory allocations profile collected since browser process startup.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetBrowserSamplingProfileResponse
	 */
	public function getBrowserSamplingProfile(ContextInterface $ctx): GetBrowserSamplingProfileResponse;


	/**
	 * Call Memory.getDOMCounters command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetDOMCountersResponse
	 */
	public function getDOMCounters(ContextInterface $ctx): GetDOMCountersResponse;


	/**
	 * Retrieve native memory allocations profile collected since last `startSampling` call.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetSamplingProfileResponse
	 */
	public function getSamplingProfile(ContextInterface $ctx): GetSamplingProfileResponse;


	/**
	 * Call Memory.prepareForLeakDetection command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function prepareForLeakDetection(ContextInterface $ctx): void;


	/**
	 * Enable/disable suppressing memory pressure notifications in all processes.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPressureNotificationsSuppressedRequest $request
	 *
	 * @return void
	 */
	public function setPressureNotificationsSuppressed(ContextInterface $ctx, SetPressureNotificationsSuppressedRequest $request): void;


	/**
	 * Simulate a memory pressure notification in all processes.
	 *
	 * @param ContextInterface $ctx
	 * @param SimulatePressureNotificationRequest $request
	 *
	 * @return void
	 */
	public function simulatePressureNotification(ContextInterface $ctx, SimulatePressureNotificationRequest $request): void;


	/**
	 * Start collecting native memory profile.
	 *
	 * @param ContextInterface $ctx
	 * @param StartSamplingRequest $request
	 *
	 * @return void
	 */
	public function startSampling(ContextInterface $ctx, StartSamplingRequest $request): void;


	/**
	 * Stop collecting native memory profile.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function stopSampling(ContextInterface $ctx): void;
}
