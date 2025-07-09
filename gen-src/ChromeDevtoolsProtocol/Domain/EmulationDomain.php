<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Emulation\CanEmulateResponse;
use ChromeDevtoolsProtocol\Model\Emulation\GetOverriddenSensorInformationRequest;
use ChromeDevtoolsProtocol\Model\Emulation\GetOverriddenSensorInformationResponse;
use ChromeDevtoolsProtocol\Model\Emulation\SetAutoDarkModeOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetAutomationOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetCPUThrottlingRateRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetDataSaverOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetDefaultBackgroundColorOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetDeviceMetricsOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetDevicePostureOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetDisabledImageTypesRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetDisplayFeaturesOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetDocumentCookieDisabledRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetEmitTouchEventsForMouseRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetEmulatedMediaRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetEmulatedOSTextScaleRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetEmulatedVisionDeficiencyRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetFocusEmulationEnabledRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetGeolocationOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetHardwareConcurrencyOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetIdleOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetLocaleOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetNavigatorOverridesRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetPageScaleFactorRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetPressureDataOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetPressureSourceOverrideEnabledRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetPressureStateOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetSafeAreaInsetsOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetScriptExecutionDisabledRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetScrollbarsHiddenRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetSensorOverrideEnabledRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetSensorOverrideReadingsRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetSmallViewportHeightDifferenceOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetTimezoneOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetTouchEmulationEnabledRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetUserAgentOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetVirtualTimePolicyRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetVirtualTimePolicyResponse;
use ChromeDevtoolsProtocol\Model\Emulation\SetVisibleSizeRequest;
use ChromeDevtoolsProtocol\Model\Emulation\VirtualTimeBudgetExpiredEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class EmulationDomain implements EmulationDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function canEmulate(ContextInterface $ctx): CanEmulateResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Emulation.canEmulate', $request);
		return CanEmulateResponse::fromJson($response);
	}


	public function clearDeviceMetricsOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Emulation.clearDeviceMetricsOverride', $request);
	}


	public function clearDevicePostureOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Emulation.clearDevicePostureOverride', $request);
	}


	public function clearDisplayFeaturesOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Emulation.clearDisplayFeaturesOverride', $request);
	}


	public function clearGeolocationOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Emulation.clearGeolocationOverride', $request);
	}


	public function clearIdleOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Emulation.clearIdleOverride', $request);
	}


	public function getOverriddenSensorInformation(
		ContextInterface $ctx,
		GetOverriddenSensorInformationRequest $request
	): GetOverriddenSensorInformationResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Emulation.getOverriddenSensorInformation', $request);
		return GetOverriddenSensorInformationResponse::fromJson($response);
	}


	public function resetPageScaleFactor(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Emulation.resetPageScaleFactor', $request);
	}


	public function setAutoDarkModeOverride(ContextInterface $ctx, SetAutoDarkModeOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setAutoDarkModeOverride', $request);
	}


	public function setAutomationOverride(ContextInterface $ctx, SetAutomationOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setAutomationOverride', $request);
	}


	public function setCPUThrottlingRate(ContextInterface $ctx, SetCPUThrottlingRateRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setCPUThrottlingRate', $request);
	}


	public function setDataSaverOverride(ContextInterface $ctx, SetDataSaverOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setDataSaverOverride', $request);
	}


	public function setDefaultBackgroundColorOverride(
		ContextInterface $ctx,
		SetDefaultBackgroundColorOverrideRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Emulation.setDefaultBackgroundColorOverride', $request);
	}


	public function setDeviceMetricsOverride(ContextInterface $ctx, SetDeviceMetricsOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setDeviceMetricsOverride', $request);
	}


	public function setDevicePostureOverride(ContextInterface $ctx, SetDevicePostureOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setDevicePostureOverride', $request);
	}


	public function setDisabledImageTypes(ContextInterface $ctx, SetDisabledImageTypesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setDisabledImageTypes', $request);
	}


	public function setDisplayFeaturesOverride(ContextInterface $ctx, SetDisplayFeaturesOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setDisplayFeaturesOverride', $request);
	}


	public function setDocumentCookieDisabled(ContextInterface $ctx, SetDocumentCookieDisabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setDocumentCookieDisabled', $request);
	}


	public function setEmitTouchEventsForMouse(ContextInterface $ctx, SetEmitTouchEventsForMouseRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setEmitTouchEventsForMouse', $request);
	}


	public function setEmulatedMedia(ContextInterface $ctx, SetEmulatedMediaRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setEmulatedMedia', $request);
	}


	public function setEmulatedOSTextScale(ContextInterface $ctx, SetEmulatedOSTextScaleRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setEmulatedOSTextScale', $request);
	}


	public function setEmulatedVisionDeficiency(ContextInterface $ctx, SetEmulatedVisionDeficiencyRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setEmulatedVisionDeficiency', $request);
	}


	public function setFocusEmulationEnabled(ContextInterface $ctx, SetFocusEmulationEnabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setFocusEmulationEnabled', $request);
	}


	public function setGeolocationOverride(ContextInterface $ctx, SetGeolocationOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setGeolocationOverride', $request);
	}


	public function setHardwareConcurrencyOverride(
		ContextInterface $ctx,
		SetHardwareConcurrencyOverrideRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Emulation.setHardwareConcurrencyOverride', $request);
	}


	public function setIdleOverride(ContextInterface $ctx, SetIdleOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setIdleOverride', $request);
	}


	public function setLocaleOverride(ContextInterface $ctx, SetLocaleOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setLocaleOverride', $request);
	}


	public function setNavigatorOverrides(ContextInterface $ctx, SetNavigatorOverridesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setNavigatorOverrides', $request);
	}


	public function setPageScaleFactor(ContextInterface $ctx, SetPageScaleFactorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setPageScaleFactor', $request);
	}


	public function setPressureDataOverride(ContextInterface $ctx, SetPressureDataOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setPressureDataOverride', $request);
	}


	public function setPressureSourceOverrideEnabled(
		ContextInterface $ctx,
		SetPressureSourceOverrideEnabledRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Emulation.setPressureSourceOverrideEnabled', $request);
	}


	public function setPressureStateOverride(ContextInterface $ctx, SetPressureStateOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setPressureStateOverride', $request);
	}


	public function setSafeAreaInsetsOverride(ContextInterface $ctx, SetSafeAreaInsetsOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setSafeAreaInsetsOverride', $request);
	}


	public function setScriptExecutionDisabled(ContextInterface $ctx, SetScriptExecutionDisabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setScriptExecutionDisabled', $request);
	}


	public function setScrollbarsHidden(ContextInterface $ctx, SetScrollbarsHiddenRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setScrollbarsHidden', $request);
	}


	public function setSensorOverrideEnabled(ContextInterface $ctx, SetSensorOverrideEnabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setSensorOverrideEnabled', $request);
	}


	public function setSensorOverrideReadings(ContextInterface $ctx, SetSensorOverrideReadingsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setSensorOverrideReadings', $request);
	}


	public function setSmallViewportHeightDifferenceOverride(
		ContextInterface $ctx,
		SetSmallViewportHeightDifferenceOverrideRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Emulation.setSmallViewportHeightDifferenceOverride', $request);
	}


	public function setTimezoneOverride(ContextInterface $ctx, SetTimezoneOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setTimezoneOverride', $request);
	}


	public function setTouchEmulationEnabled(ContextInterface $ctx, SetTouchEmulationEnabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setTouchEmulationEnabled', $request);
	}


	public function setUserAgentOverride(ContextInterface $ctx, SetUserAgentOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setUserAgentOverride', $request);
	}


	public function setVirtualTimePolicy(
		ContextInterface $ctx,
		SetVirtualTimePolicyRequest $request
	): SetVirtualTimePolicyResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Emulation.setVirtualTimePolicy', $request);
		return SetVirtualTimePolicyResponse::fromJson($response);
	}


	public function setVisibleSize(ContextInterface $ctx, SetVisibleSizeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Emulation.setVisibleSize', $request);
	}


	public function addVirtualTimeBudgetExpiredListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Emulation.virtualTimeBudgetExpired', function ($event) use ($listener) {
			return $listener(VirtualTimeBudgetExpiredEvent::fromJson($event));
		});
	}


	public function awaitVirtualTimeBudgetExpired(ContextInterface $ctx): VirtualTimeBudgetExpiredEvent
	{
		return VirtualTimeBudgetExpiredEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Emulation.virtualTimeBudgetExpired'));
	}
}
