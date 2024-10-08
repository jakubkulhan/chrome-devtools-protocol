<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setPausedInDebuggerMessage command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPausedInDebuggerMessageRequest implements \JsonSerializable
{
	/**
	 * The message to display, also triggers resume and step over controls.
	 *
	 * @var string|null
	 */
	public $message;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPausedInDebuggerMessageRequestBuilder
	 */
	public static function builder(): SetPausedInDebuggerMessageRequestBuilder
	{
		return new SetPausedInDebuggerMessageRequestBuilder();
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
