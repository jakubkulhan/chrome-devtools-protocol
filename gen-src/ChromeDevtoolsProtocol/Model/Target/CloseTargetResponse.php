<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Response to Target.closeTarget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CloseTargetResponse implements \JsonSerializable
{
	/**
	 * Always set to true. If an error occurs, the response indicates protocol error.
	 *
	 * @var bool
	 */
	public $success;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->success)) {
			$instance->success = (bool)$data->success;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->success !== null) {
			$data->success = $this->success;
		}
		return $data;
	}
}
