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
	public $errorType;

	/**
	 * Code is the numeric enum entry for a specific set of error codes, such as PipelineStatusCodes in media/base/pipeline_status.h
	 *
	 * @var int
	 */
	public $code;

	/**
	 * A trace of where this error was caused / where it passed through.
	 *
	 * @var PlayerErrorSourceLocation[]
	 */
	public $stack;

	/**
	 * Errors potentially have a root cause error, ie, a DecoderError might be caused by an WindowsError
	 *
	 * @var PlayerError[]
	 */
	public $cause;

	/**
	 * Extra data attached to an error, such as an HRESULT, Video Codec, etc.
	 *
	 * @var object
	 */
	public $data;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->errorType)) {
			$instance->errorType = (string)$data->errorType;
		}
		if (isset($data->code)) {
			$instance->code = (int)$data->code;
		}
		if (isset($data->stack)) {
			$instance->stack = [];
			foreach ($data->stack as $item) {
				$instance->stack[] = PlayerErrorSourceLocation::fromJson($item);
			}
		}
		if (isset($data->cause)) {
			$instance->cause = [];
			foreach ($data->cause as $item) {
				$instance->cause[] = PlayerError::fromJson($item);
			}
		}
		if (isset($data->data)) {
			$instance->data = $data->data;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->errorType !== null) {
			$data->errorType = $this->errorType;
		}
		if ($this->code !== null) {
			$data->code = $this->code;
		}
		if ($this->stack !== null) {
			$data->stack = [];
			foreach ($this->stack as $item) {
				$data->stack[] = $item->jsonSerialize();
			}
		}
		if ($this->cause !== null) {
			$data->cause = [];
			foreach ($this->cause as $item) {
				$data->cause[] = $item->jsonSerialize();
			}
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}
}
