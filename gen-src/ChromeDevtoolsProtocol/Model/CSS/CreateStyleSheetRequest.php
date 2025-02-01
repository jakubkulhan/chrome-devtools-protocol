<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.createStyleSheet command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateStyleSheetRequest implements \JsonSerializable
{
	/**
	 * Identifier of the frame where "via-inspector" stylesheet should be created.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * If true, creates a new stylesheet for every call. If false, returns a stylesheet previously created by a call with force=false for the frame's document if it exists or creates a new stylesheet (default: false).
	 *
	 * @var bool|null
	 */
	public $force;


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
		if (isset($data->force)) {
			$instance->force = (bool)$data->force;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->force !== null) {
			$data->force = $this->force;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CreateStyleSheetRequestBuilder
	 */
	public static function builder(): CreateStyleSheetRequestBuilder
	{
		return new CreateStyleSheetRequestBuilder();
	}
}
