<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Request for Accessibility.getFullAXTree command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFullAXTreeRequest implements \JsonSerializable
{
	/**
	 * The maximum depth at which descendants of the root node should be retrieved. If omitted, the full tree is returned.
	 *
	 * @var int|null
	 */
	public $max_depth;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->max_depth)) {
			$instance->max_depth = (int)$data->max_depth;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->max_depth !== null) {
			$data->max_depth = $this->max_depth;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetFullAXTreeRequestBuilder
	 */
	public static function builder(): GetFullAXTreeRequestBuilder
	{
		return new GetFullAXTreeRequestBuilder();
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
