<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * Corresponds to kMediaError
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlayerError implements \JsonSerializable
{
	/** @var string */
	public $type;

	/**
	 * When this switches to using media::Status instead of PipelineStatus we can remove "errorCode" and replace it with the fields from a Status instance. This also seems like a duplicate of the error level enum - there is a todo bug to have that level removed and use this instead. (crbug.com/1068454)
	 *
	 * @var string
	 */
	public $errorCode;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->errorCode)) {
			$instance->errorCode = (string)$data->errorCode;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->errorCode !== null) {
			$data->errorCode = $this->errorCode;
		}
		return $data;
	}
}
