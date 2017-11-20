<?php
namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Provides information about the GPU(s) on the system.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GPUInfo implements \JsonSerializable
{
	/**
	 * The graphics devices on the system. Element 0 is the primary GPU.
	 *
	 * @var GPUDevice[]
	 */
	public $devices;

	/**
	 * An optional dictionary of additional GPU related attributes.
	 *
	 * @var object|null
	 */
	public $auxAttributes;

	/**
	 * An optional dictionary of graphics features and their status.
	 *
	 * @var object|null
	 */
	public $featureStatus;

	/**
	 * An optional array of GPU driver bug workarounds.
	 *
	 * @var string[]
	 */
	public $driverBugWorkarounds;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->devices)) {
			$instance->devices = [];
			foreach ($data->devices as $item) {
				$instance->devices[] = GPUDevice::fromJson($item);
			}
		}
		if (isset($data->auxAttributes)) {
			$instance->auxAttributes = $data->auxAttributes;
		}
		if (isset($data->featureStatus)) {
			$instance->featureStatus = $data->featureStatus;
		}
		if (isset($data->driverBugWorkarounds)) {
			$instance->driverBugWorkarounds = [];
			foreach ($data->driverBugWorkarounds as $item) {
				$instance->driverBugWorkarounds[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->devices !== null) {
			$data->devices = [];
			foreach ($this->devices as $item) {
				$data->devices[] = $item->jsonSerialize();
			}
		}
		if ($this->auxAttributes !== null) {
			$data->auxAttributes = $this->auxAttributes;
		}
		if ($this->featureStatus !== null) {
			$data->featureStatus = $this->featureStatus;
		}
		if ($this->driverBugWorkarounds !== null) {
			$data->driverBugWorkarounds = [];
			foreach ($this->driverBugWorkarounds as $item) {
				$data->driverBugWorkarounds[] = $item;
			}
		}
		return $data;
	}
}
