<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Request for Accessibility.getRootAXNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRootAXNodeRequest implements \JsonSerializable
{
	/**
	 * The frame in whose document the node resides. If omitted, the root frame is used.
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
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetRootAXNodeRequestBuilder
	 */
	public static function builder(): GetRootAXNodeRequestBuilder
	{
		return new GetRootAXNodeRequestBuilder();
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
