<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.pauseOnAsyncTask command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PauseOnAsyncTaskRequest implements \JsonSerializable
{
	/**
	 * Debugger will pause when given async task is started.
	 *
	 * @var string
	 */
	public $asyncTaskId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->asyncTaskId)) {
			$instance->asyncTaskId = (string)$data->asyncTaskId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->asyncTaskId !== null) {
			$data->asyncTaskId = $this->asyncTaskId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return PauseOnAsyncTaskRequestBuilder
	 */
	public static function builder(): PauseOnAsyncTaskRequestBuilder
	{
		return new PauseOnAsyncTaskRequestBuilder();
	}
}
