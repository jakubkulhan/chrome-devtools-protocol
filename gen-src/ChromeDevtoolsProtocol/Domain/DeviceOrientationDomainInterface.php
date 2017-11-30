<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\DeviceOrientation\SetDeviceOrientationOverrideRequest;

/**
 * DeviceOrientation domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DeviceOrientationDomainInterface
{
	/**
	 * Clears the overridden Device Orientation.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearDeviceOrientationOverride(ContextInterface $ctx): void;


	/**
	 * Overrides the Device Orientation.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDeviceOrientationOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDeviceOrientationOverride(ContextInterface $ctx, SetDeviceOrientationOverrideRequest $request): void;
}
