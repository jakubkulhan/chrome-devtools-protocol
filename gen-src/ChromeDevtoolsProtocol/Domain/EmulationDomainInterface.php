<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Emulation\AddScreenRequest;
use ChromeDevtoolsProtocol\Model\Emulation\AddScreenResponse;
use ChromeDevtoolsProtocol\Model\Emulation\CanEmulateResponse;
use ChromeDevtoolsProtocol\Model\Emulation\GetOverriddenSensorInformationRequest;
use ChromeDevtoolsProtocol\Model\Emulation\GetOverriddenSensorInformationResponse;
use ChromeDevtoolsProtocol\Model\Emulation\GetScreenInfosResponse;
use ChromeDevtoolsProtocol\Model\Emulation\RemoveScreenRequest;
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

/**
 * This domain emulates different environments for the page.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface EmulationDomainInterface
{
	/**
	 * Add a new screen to the device. Only supported in headless mode.
	 *
	 * @param ContextInterface $ctx
	 * @param AddScreenRequest $request
	 *
	 * @return AddScreenResponse
	 */
	public function addScreen(ContextInterface $ctx, AddScreenRequest $request): AddScreenResponse;


	/**
	 * Tells whether emulation is supported.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CanEmulateResponse
	 */
	public function canEmulate(ContextInterface $ctx): CanEmulateResponse;


	/**
	 * Clears the overridden device metrics.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearDeviceMetricsOverride(ContextInterface $ctx): void;


	/**
	 * Clears a device posture override set with either setDeviceMetricsOverride() or setDevicePostureOverride() and starts using posture information from the platform again. Does nothing if no override is set.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearDevicePostureOverride(ContextInterface $ctx): void;


	/**
	 * Clears the display features override set with either setDeviceMetricsOverride() or setDisplayFeaturesOverride() and starts using display features from the platform again. Does nothing if no override is set.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearDisplayFeaturesOverride(ContextInterface $ctx): void;


	/**
	 * Clears the overridden Geolocation Position and Error.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearGeolocationOverride(ContextInterface $ctx): void;


	/**
	 * Clears Idle state overrides.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearIdleOverride(ContextInterface $ctx): void;


	/**
	 * Call Emulation.getOverriddenSensorInformation command.
	 *
	 * @param ContextInterface $ctx
	 * @param GetOverriddenSensorInformationRequest $request
	 *
	 * @return GetOverriddenSensorInformationResponse
	 */
	public function getOverriddenSensorInformation(
		ContextInterface $ctx,
		GetOverriddenSensorInformationRequest $request
	): GetOverriddenSensorInformationResponse;


	/**
	 * Returns device's screen configuration. In headful mode, the physical screens configuration is returned, whereas in headless mode, a virtual headless screen configuration is provided instead.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetScreenInfosResponse
	 */
	public function getScreenInfos(ContextInterface $ctx): GetScreenInfosResponse;


	/**
	 * Remove screen from the device. Only supported in headless mode.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveScreenRequest $request
	 *
	 * @return void
	 */
	public function removeScreen(ContextInterface $ctx, RemoveScreenRequest $request): void;


	/**
	 * Requests that page scale factor is reset to initial values.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function resetPageScaleFactor(ContextInterface $ctx): void;


	/**
	 * Automatically render all web contents using a dark theme.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAutoDarkModeOverrideRequest $request
	 *
	 * @return void
	 */
	public function setAutoDarkModeOverride(ContextInterface $ctx, SetAutoDarkModeOverrideRequest $request): void;


	/**
	 * Allows overriding the automation flag.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAutomationOverrideRequest $request
	 *
	 * @return void
	 */
	public function setAutomationOverride(ContextInterface $ctx, SetAutomationOverrideRequest $request): void;


	/**
	 * Enables CPU throttling to emulate slow CPUs.
	 *
	 * @param ContextInterface $ctx
	 * @param SetCPUThrottlingRateRequest $request
	 *
	 * @return void
	 */
	public function setCPUThrottlingRate(ContextInterface $ctx, SetCPUThrottlingRateRequest $request): void;


	/**
	 * Override the value of navigator.connection.saveData
	 *
	 * @param ContextInterface $ctx
	 * @param SetDataSaverOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDataSaverOverride(ContextInterface $ctx, SetDataSaverOverrideRequest $request): void;


	/**
	 * Sets or clears an override of the default background color of the frame. This override is used if the content does not specify one.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDefaultBackgroundColorOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDefaultBackgroundColorOverride(
		ContextInterface $ctx,
		SetDefaultBackgroundColorOverrideRequest $request
	): void;


	/**
	 * Overrides the values of device screen dimensions (window.screen.width, window.screen.height, window.innerWidth, window.innerHeight, and "device-width"/"device-height"-related CSS media query results).
	 *
	 * @param ContextInterface $ctx
	 * @param SetDeviceMetricsOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDeviceMetricsOverride(ContextInterface $ctx, SetDeviceMetricsOverrideRequest $request): void;


	/**
	 * Start reporting the given posture value to the Device Posture API. This override can also be set in setDeviceMetricsOverride().
	 *
	 * @param ContextInterface $ctx
	 * @param SetDevicePostureOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDevicePostureOverride(ContextInterface $ctx, SetDevicePostureOverrideRequest $request): void;


	/**
	 * Call Emulation.setDisabledImageTypes command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDisabledImageTypesRequest $request
	 *
	 * @return void
	 */
	public function setDisabledImageTypes(ContextInterface $ctx, SetDisabledImageTypesRequest $request): void;


	/**
	 * Start using the given display features to pupulate the Viewport Segments API. This override can also be set in setDeviceMetricsOverride().
	 *
	 * @param ContextInterface $ctx
	 * @param SetDisplayFeaturesOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDisplayFeaturesOverride(ContextInterface $ctx, SetDisplayFeaturesOverrideRequest $request): void;


	/**
	 * Call Emulation.setDocumentCookieDisabled command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDocumentCookieDisabledRequest $request
	 *
	 * @return void
	 */
	public function setDocumentCookieDisabled(ContextInterface $ctx, SetDocumentCookieDisabledRequest $request): void;


	/**
	 * Call Emulation.setEmitTouchEventsForMouse command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetEmitTouchEventsForMouseRequest $request
	 *
	 * @return void
	 */
	public function setEmitTouchEventsForMouse(ContextInterface $ctx, SetEmitTouchEventsForMouseRequest $request): void;


	/**
	 * Emulates the given media type or media feature for CSS media queries.
	 *
	 * @param ContextInterface $ctx
	 * @param SetEmulatedMediaRequest $request
	 *
	 * @return void
	 */
	public function setEmulatedMedia(ContextInterface $ctx, SetEmulatedMediaRequest $request): void;


	/**
	 * Emulates the given OS text scale.
	 *
	 * @param ContextInterface $ctx
	 * @param SetEmulatedOSTextScaleRequest $request
	 *
	 * @return void
	 */
	public function setEmulatedOSTextScale(ContextInterface $ctx, SetEmulatedOSTextScaleRequest $request): void;


	/**
	 * Emulates the given vision deficiency.
	 *
	 * @param ContextInterface $ctx
	 * @param SetEmulatedVisionDeficiencyRequest $request
	 *
	 * @return void
	 */
	public function setEmulatedVisionDeficiency(ContextInterface $ctx, SetEmulatedVisionDeficiencyRequest $request): void;


	/**
	 * Enables or disables simulating a focused and active page.
	 *
	 * @param ContextInterface $ctx
	 * @param SetFocusEmulationEnabledRequest $request
	 *
	 * @return void
	 */
	public function setFocusEmulationEnabled(ContextInterface $ctx, SetFocusEmulationEnabledRequest $request): void;


	/**
	 * Overrides the Geolocation Position or Error. Omitting latitude, longitude or accuracy emulates position unavailable.
	 *
	 * @param ContextInterface $ctx
	 * @param SetGeolocationOverrideRequest $request
	 *
	 * @return void
	 */
	public function setGeolocationOverride(ContextInterface $ctx, SetGeolocationOverrideRequest $request): void;


	/**
	 * Call Emulation.setHardwareConcurrencyOverride command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetHardwareConcurrencyOverrideRequest $request
	 *
	 * @return void
	 */
	public function setHardwareConcurrencyOverride(
		ContextInterface $ctx,
		SetHardwareConcurrencyOverrideRequest $request
	): void;


	/**
	 * Overrides the Idle state.
	 *
	 * @param ContextInterface $ctx
	 * @param SetIdleOverrideRequest $request
	 *
	 * @return void
	 */
	public function setIdleOverride(ContextInterface $ctx, SetIdleOverrideRequest $request): void;


	/**
	 * Overrides default host system locale with the specified one.
	 *
	 * @param ContextInterface $ctx
	 * @param SetLocaleOverrideRequest $request
	 *
	 * @return void
	 */
	public function setLocaleOverride(ContextInterface $ctx, SetLocaleOverrideRequest $request): void;


	/**
	 * Overrides value returned by the javascript navigator object.
	 *
	 * @param ContextInterface $ctx
	 * @param SetNavigatorOverridesRequest $request
	 *
	 * @return void
	 */
	public function setNavigatorOverrides(ContextInterface $ctx, SetNavigatorOverridesRequest $request): void;


	/**
	 * Sets a specified page scale factor.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPageScaleFactorRequest $request
	 *
	 * @return void
	 */
	public function setPageScaleFactor(ContextInterface $ctx, SetPageScaleFactorRequest $request): void;


	/**
	 * Provides a given pressure data set that will be processed and eventually be delivered to PressureObserver users. |source| must have been previously overridden by setPressureSourceOverrideEnabled.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPressureDataOverrideRequest $request
	 *
	 * @return void
	 */
	public function setPressureDataOverride(ContextInterface $ctx, SetPressureDataOverrideRequest $request): void;


	/**
	 * Overrides a pressure source of a given type, as used by the Compute Pressure API, so that updates to PressureObserver.observe() are provided via setPressureStateOverride instead of being retrieved from platform-provided telemetry data.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPressureSourceOverrideEnabledRequest $request
	 *
	 * @return void
	 */
	public function setPressureSourceOverrideEnabled(
		ContextInterface $ctx,
		SetPressureSourceOverrideEnabledRequest $request
	): void;


	/**
	 * TODO: OBSOLETE: To remove when setPressureDataOverride is merged. Provides a given pressure state that will be processed and eventually be delivered to PressureObserver users. |source| must have been previously overridden by setPressureSourceOverrideEnabled.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPressureStateOverrideRequest $request
	 *
	 * @return void
	 */
	public function setPressureStateOverride(ContextInterface $ctx, SetPressureStateOverrideRequest $request): void;


	/**
	 * Overrides the values for env(safe-area-inset-*) and env(safe-area-max-inset-*). Unset values will cause the respective variables to be undefined, even if previously overridden.
	 *
	 * @param ContextInterface $ctx
	 * @param SetSafeAreaInsetsOverrideRequest $request
	 *
	 * @return void
	 */
	public function setSafeAreaInsetsOverride(ContextInterface $ctx, SetSafeAreaInsetsOverrideRequest $request): void;


	/**
	 * Switches script execution in the page.
	 *
	 * @param ContextInterface $ctx
	 * @param SetScriptExecutionDisabledRequest $request
	 *
	 * @return void
	 */
	public function setScriptExecutionDisabled(ContextInterface $ctx, SetScriptExecutionDisabledRequest $request): void;


	/**
	 * Call Emulation.setScrollbarsHidden command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetScrollbarsHiddenRequest $request
	 *
	 * @return void
	 */
	public function setScrollbarsHidden(ContextInterface $ctx, SetScrollbarsHiddenRequest $request): void;


	/**
	 * Overrides a platform sensor of a given type. If |enabled| is true, calls to Sensor.start() will use a virtual sensor as backend rather than fetching data from a real hardware sensor. Otherwise, existing virtual sensor-backend Sensor objects will fire an error event and new calls to Sensor.start() will attempt to use a real sensor instead.
	 *
	 * @param ContextInterface $ctx
	 * @param SetSensorOverrideEnabledRequest $request
	 *
	 * @return void
	 */
	public function setSensorOverrideEnabled(ContextInterface $ctx, SetSensorOverrideEnabledRequest $request): void;


	/**
	 * Updates the sensor readings reported by a sensor type previously overridden by setSensorOverrideEnabled.
	 *
	 * @param ContextInterface $ctx
	 * @param SetSensorOverrideReadingsRequest $request
	 *
	 * @return void
	 */
	public function setSensorOverrideReadings(ContextInterface $ctx, SetSensorOverrideReadingsRequest $request): void;


	/**
	 * Allows overriding the difference between the small and large viewport sizes, which determine the value of the `svh` and `lvh` unit, respectively. Only supported for top-level frames.
	 *
	 * @param ContextInterface $ctx
	 * @param SetSmallViewportHeightDifferenceOverrideRequest $request
	 *
	 * @return void
	 */
	public function setSmallViewportHeightDifferenceOverride(
		ContextInterface $ctx,
		SetSmallViewportHeightDifferenceOverrideRequest $request
	): void;


	/**
	 * Overrides default host system timezone with the specified one.
	 *
	 * @param ContextInterface $ctx
	 * @param SetTimezoneOverrideRequest $request
	 *
	 * @return void
	 */
	public function setTimezoneOverride(ContextInterface $ctx, SetTimezoneOverrideRequest $request): void;


	/**
	 * Enables touch on platforms which do not support them.
	 *
	 * @param ContextInterface $ctx
	 * @param SetTouchEmulationEnabledRequest $request
	 *
	 * @return void
	 */
	public function setTouchEmulationEnabled(ContextInterface $ctx, SetTouchEmulationEnabledRequest $request): void;


	/**
	 * Allows overriding user agent with the given string. `userAgentMetadata` must be set for Client Hint headers to be sent.
	 *
	 * @param ContextInterface $ctx
	 * @param SetUserAgentOverrideRequest $request
	 *
	 * @return void
	 */
	public function setUserAgentOverride(ContextInterface $ctx, SetUserAgentOverrideRequest $request): void;


	/**
	 * Turns on virtual time for all frames (replacing real-time with a synthetic time source) and sets the current virtual time policy. Note this supersedes any previous time budget.
	 *
	 * @param ContextInterface $ctx
	 * @param SetVirtualTimePolicyRequest $request
	 *
	 * @return SetVirtualTimePolicyResponse
	 */
	public function setVirtualTimePolicy(
		ContextInterface $ctx,
		SetVirtualTimePolicyRequest $request
	): SetVirtualTimePolicyResponse;


	/**
	 * Resizes the frame/viewport of the page. Note that this does not affect the frame's container (e.g. browser window). Can be used to produce screenshots of the specified size. Not supported on Android.
	 *
	 * @param ContextInterface $ctx
	 * @param SetVisibleSizeRequest $request
	 *
	 * @return void
	 */
	public function setVisibleSize(ContextInterface $ctx, SetVisibleSizeRequest $request): void;


	/**
	 * Notification sent after the virtual time budget for the current VirtualTimePolicy has run out.
	 *
	 * Listener will be called whenever event Emulation.virtualTimeBudgetExpired is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addVirtualTimeBudgetExpiredListener(callable $listener): SubscriptionInterface;


	/**
	 * Notification sent after the virtual time budget for the current VirtualTimePolicy has run out.
	 *
	 * Method will block until first Emulation.virtualTimeBudgetExpired event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return VirtualTimeBudgetExpiredEvent
	 */
	public function awaitVirtualTimeBudgetExpired(ContextInterface $ctx): VirtualTimeBudgetExpiredEvent;
}
