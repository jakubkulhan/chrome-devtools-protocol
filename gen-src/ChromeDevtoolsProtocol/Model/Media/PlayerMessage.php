<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * Have one type per entry in MediaLogRecord::Type Corresponds to kMessage
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlayerMessage implements \JsonSerializable
{
	/**
	 * Keep in sync with MediaLogMessageLevel We are currently keeping the message level 'error' separate from the PlayerError type because right now they represent different things, this one being a DVLOG(ERROR) style log message that gets printed based on what log level is selected in the UI, and the other is a representation of a media::PipelineStatus object. Soon however we're going to be moving away from using PipelineStatus for errors and introducing a new error type which should hopefully let us integrate the error log level into the PlayerError type.
	 *
	 * @var string
	 */
	public $level;

	/** @var string */
	public $message;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->level)) {
			$instance->level = (string)$data->level;
		}
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->level !== null) {
			$data->level = $this->level;
		}
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		return $data;
	}
}
