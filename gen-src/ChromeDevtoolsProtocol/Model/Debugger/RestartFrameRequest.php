<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.restartFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RestartFrameRequest implements \JsonSerializable
{
	/**
	 * Call frame identifier to evaluate on.
	 *
	 * @var string
	 */
	public $callFrameId;

	/**
	 * The `mode` parameter must be present and set to 'StepInto', otherwise `restartFrame` will error out.
	 *
	 * @var string|null
	 */
	public $mode;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->callFrameId)) {
			$instance->callFrameId = (string)$data->callFrameId;
		}
		if (isset($data->mode)) {
			$instance->mode = (string)$data->mode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->callFrameId !== null) {
			$data->callFrameId = $this->callFrameId;
		}
		if ($this->mode !== null) {
			$data->mode = $this->mode;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RestartFrameRequestBuilder
	 */
	public static function builder(): RestartFrameRequestBuilder
	{
		return new RestartFrameRequestBuilder();
	}
}
