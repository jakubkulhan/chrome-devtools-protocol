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
	public $depth;

	/**
	 * Deprecated. This parameter has been renamed to `depth`. If depth is not provided, max_depth will be used.
	 *
	 * @var int|null
	 */
	public $max_depth;

	/**
	 * The frame for whose document the AX tree should be retrieved. If omited, the root frame is used.
	 *
	 * @var string
	 */
	public $frameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->depth)) {
			$instance->depth = (int)$data->depth;
		}
		if (isset($data->max_depth)) {
			$instance->max_depth = (int)$data->max_depth;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->depth !== null) {
			$data->depth = $this->depth;
		}
		if ($this->max_depth !== null) {
			$data->max_depth = $this->max_depth;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
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
