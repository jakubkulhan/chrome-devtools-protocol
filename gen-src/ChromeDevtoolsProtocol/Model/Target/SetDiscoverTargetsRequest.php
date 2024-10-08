<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.setDiscoverTargets command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDiscoverTargetsRequest implements \JsonSerializable
{
	/**
	 * Whether to discover available targets.
	 *
	 * @var bool
	 */
	public $discover;

	/**
	 * Only targets matching filter will be attached. If `discover` is false, `filter` must be omitted or empty.
	 *
	 * @var FilterEntry[]
	 */
	public $filter;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->discover)) {
			$instance->discover = (bool)$data->discover;
		}
		if (isset($data->filter)) {
			$instance->filter = [];
			foreach ($data->filter as $item) {
				$instance->filter[] = FilterEntry::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->discover !== null) {
			$data->discover = $this->discover;
		}
		if ($this->filter !== null) {
			$data->filter = [];
			foreach ($this->filter as $item) {
				$data->filter[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDiscoverTargetsRequestBuilder
	 */
	public static function builder(): SetDiscoverTargetsRequestBuilder
	{
		return new SetDiscoverTargetsRequestBuilder();
	}
}
