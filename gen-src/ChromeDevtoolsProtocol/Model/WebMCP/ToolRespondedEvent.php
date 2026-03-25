<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;

/**
 * Event fired when a tool invocation completes or fails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ToolRespondedEvent implements \JsonSerializable
{
	/**
	 * Invocation identifier.
	 *
	 * @var string
	 */
	public $invocationId;

	/**
	 * Status of the invocation.
	 *
	 * @var string
	 */
	public $status;

	/**
	 * Output or error delivered as delivered to the agent. Missing if `status` is anything other than Success.
	 *
	 * @var object|null
	 */
	public $output;

	/**
	 * Error text for protocol users.
	 *
	 * @var string|null
	 */
	public $errorText;

	/**
	 * The exception object, if the javascript tool threw an error>
	 *
	 * @var RemoteObject|null
	 */
	public $exception;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->invocationId)) {
			$instance->invocationId = (string)$data->invocationId;
		}
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		if (isset($data->output)) {
			$instance->output = $data->output;
		}
		if (isset($data->errorText)) {
			$instance->errorText = (string)$data->errorText;
		}
		if (isset($data->exception)) {
			$instance->exception = RemoteObject::fromJson($data->exception);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->invocationId !== null) {
			$data->invocationId = $this->invocationId;
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->output !== null) {
			$data->output = $this->output;
		}
		if ($this->errorText !== null) {
			$data->errorText = $this->errorText;
		}
		if ($this->exception !== null) {
			$data->exception = $this->exception->jsonSerialize();
		}
		return $data;
	}
}
