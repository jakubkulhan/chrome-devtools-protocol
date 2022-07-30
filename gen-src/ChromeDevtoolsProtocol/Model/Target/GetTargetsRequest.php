<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.getTargets command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetTargetsRequest implements \JsonSerializable
{
	/**
	 * Only targets matching filter will be reported. If filter is not specified and target discovery is currently enabled, a filter used for target discovery is used for consistency.
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
	 * @return GetTargetsRequestBuilder
	 */
	public static function builder(): GetTargetsRequestBuilder
	{
		return new GetTargetsRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
