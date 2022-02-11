<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.getUsageAndQuota command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetUsageAndQuotaResponse implements \JsonSerializable
{
	/**
	 * Storage usage (bytes).
	 *
	 * @var int|float
	 */
	public $usage;

	/**
	 * Storage quota (bytes).
	 *
	 * @var int|float
	 */
	public $quota;

	/**
	 * Whether or not the origin has an active storage quota override
	 *
	 * @var bool
	 */
	public $overrideActive;

	/**
	 * Storage usage per type (bytes).
	 *
	 * @var UsageForType[]
	 */
	public $usageBreakdown;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->usage)) {
			$instance->usage = $data->usage;
		}
		if (isset($data->quota)) {
			$instance->quota = $data->quota;
		}
		if (isset($data->overrideActive)) {
			$instance->overrideActive = (bool)$data->overrideActive;
		}
		if (isset($data->usageBreakdown)) {
			$instance->usageBreakdown = [];
			foreach ($data->usageBreakdown as $item) {
				$instance->usageBreakdown[] = UsageForType::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->usage !== null) {
			$data->usage = $this->usage;
		}
		if ($this->quota !== null) {
			$data->quota = $this->quota;
		}
		if ($this->overrideActive !== null) {
			$data->overrideActive = $this->overrideActive;
		}
		if ($this->usageBreakdown !== null) {
			$data->usageBreakdown = [];
			foreach ($this->usageBreakdown as $item) {
				$data->usageBreakdown[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
