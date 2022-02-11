<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.getWindowForTarget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetWindowForTargetRequest implements \JsonSerializable
{
	/**
	 * Devtools agent host id. If called as a part of the session, associated targetId is used.
	 *
	 * @var string
	 */
	public $targetId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetWindowForTargetRequestBuilder
	 */
	public static function builder(): GetWindowForTargetRequestBuilder
	{
		return new GetWindowForTargetRequestBuilder();
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
