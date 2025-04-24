<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Represents a dictionary object passed in as privateAggregationConfig to run or selectURL.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedStoragePrivateAggregationConfig implements \JsonSerializable
{
	/**
	 * The chosen aggregation service deployment.
	 *
	 * @var string|null
	 */
	public $aggregationCoordinatorOrigin;

	/**
	 * The context ID provided.
	 *
	 * @var string|null
	 */
	public $contextId;

	/**
	 * Configures the maximum size allowed for filtering IDs.
	 *
	 * @var int
	 */
	public $filteringIdMaxBytes;

	/**
	 * The limit on the number of contributions in the final report.
	 *
	 * @var int|null
	 */
	public $maxContributions;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->aggregationCoordinatorOrigin)) {
			$instance->aggregationCoordinatorOrigin = (string)$data->aggregationCoordinatorOrigin;
		}
		if (isset($data->contextId)) {
			$instance->contextId = (string)$data->contextId;
		}
		if (isset($data->filteringIdMaxBytes)) {
			$instance->filteringIdMaxBytes = (int)$data->filteringIdMaxBytes;
		}
		if (isset($data->maxContributions)) {
			$instance->maxContributions = (int)$data->maxContributions;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->aggregationCoordinatorOrigin !== null) {
			$data->aggregationCoordinatorOrigin = $this->aggregationCoordinatorOrigin;
		}
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		if ($this->filteringIdMaxBytes !== null) {
			$data->filteringIdMaxBytes = $this->filteringIdMaxBytes;
		}
		if ($this->maxContributions !== null) {
			$data->maxContributions = $this->maxContributions;
		}
		return $data;
	}
}
