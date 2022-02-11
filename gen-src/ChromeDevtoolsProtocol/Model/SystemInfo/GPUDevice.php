<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Describes a single graphics processor (GPU).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GPUDevice implements \JsonSerializable
{
	/**
	 * PCI ID of the GPU vendor, if available; 0 otherwise.
	 *
	 * @var int|float
	 */
	public $vendorId;

	/**
	 * PCI ID of the GPU device, if available; 0 otherwise.
	 *
	 * @var int|float
	 */
	public $deviceId;

	/**
	 * Sub sys ID of the GPU, only available on Windows.
	 *
	 * @var int|float|null
	 */
	public $subSysId;

	/**
	 * Revision of the GPU, only available on Windows.
	 *
	 * @var int|float|null
	 */
	public $revision;

	/**
	 * String description of the GPU vendor, if the PCI ID is not available.
	 *
	 * @var string
	 */
	public $vendorString;

	/**
	 * String description of the GPU device, if the PCI ID is not available.
	 *
	 * @var string
	 */
	public $deviceString;

	/**
	 * String description of the GPU driver vendor.
	 *
	 * @var string
	 */
	public $driverVendor;

	/**
	 * String description of the GPU driver version.
	 *
	 * @var string
	 */
	public $driverVersion;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->vendorId)) {
			$instance->vendorId = $data->vendorId;
		}
		if (isset($data->deviceId)) {
			$instance->deviceId = $data->deviceId;
		}
		if (isset($data->subSysId)) {
			$instance->subSysId = $data->subSysId;
		}
		if (isset($data->revision)) {
			$instance->revision = $data->revision;
		}
		if (isset($data->vendorString)) {
			$instance->vendorString = (string)$data->vendorString;
		}
		if (isset($data->deviceString)) {
			$instance->deviceString = (string)$data->deviceString;
		}
		if (isset($data->driverVendor)) {
			$instance->driverVendor = (string)$data->driverVendor;
		}
		if (isset($data->driverVersion)) {
			$instance->driverVersion = (string)$data->driverVersion;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->vendorId !== null) {
			$data->vendorId = $this->vendorId;
		}
		if ($this->deviceId !== null) {
			$data->deviceId = $this->deviceId;
		}
		if ($this->subSysId !== null) {
			$data->subSysId = $this->subSysId;
		}
		if ($this->revision !== null) {
			$data->revision = $this->revision;
		}
		if ($this->vendorString !== null) {
			$data->vendorString = $this->vendorString;
		}
		if ($this->deviceString !== null) {
			$data->deviceString = $this->deviceString;
		}
		if ($this->driverVendor !== null) {
			$data->driverVendor = $this->driverVendor;
		}
		if ($this->driverVersion !== null) {
			$data->driverVersion = $this->driverVersion;
		}
		return $data;
	}
}
