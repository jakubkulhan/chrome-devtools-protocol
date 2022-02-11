<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.overrideQuotaForOrigin command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OverrideQuotaForOriginRequest implements \JsonSerializable
{
	/**
	 * Security origin.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * The quota size (in bytes) to override the original quota with. If this is called multiple times, the overridden quota will be equal to the quotaSize provided in the final call. If this is called without specifying a quotaSize, the quota will be reset to the default value for the specified origin. If this is called multiple times with different origins, the override will be maintained for each origin until it is disabled (called without a quotaSize).
	 *
	 * @var int|float|null
	 */
	public $quotaSize;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->quotaSize)) {
			$instance->quotaSize = $data->quotaSize;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->quotaSize !== null) {
			$data->quotaSize = $this->quotaSize;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return OverrideQuotaForOriginRequestBuilder
	 */
	public static function builder(): OverrideQuotaForOriginRequestBuilder
	{
		return new OverrideQuotaForOriginRequestBuilder();
	}
}
