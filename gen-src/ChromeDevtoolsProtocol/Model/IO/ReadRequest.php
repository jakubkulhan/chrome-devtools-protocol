<?php

namespace ChromeDevtoolsProtocol\Model\IO;

/**
 * Request for IO.read command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReadRequest implements \JsonSerializable
{
	/**
	 * Handle of the stream to read.
	 *
	 * @var string
	 */
	public $handle;

	/**
	 * Seek to the specified offset before reading (if not specificed, proceed with offset following the last read). Some types of streams may only support sequential reads.
	 *
	 * @var int|null
	 */
	public $offset;

	/**
	 * Maximum number of bytes to read (left upon the agent discretion if not specified).
	 *
	 * @var int|null
	 */
	public $size;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->handle)) {
			$instance->handle = (string)$data->handle;
		}
		if (isset($data->offset)) {
			$instance->offset = (int)$data->offset;
		}
		if (isset($data->size)) {
			$instance->size = (int)$data->size;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->handle !== null) {
			$data->handle = $this->handle;
		}
		if ($this->offset !== null) {
			$data->offset = $this->offset;
		}
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReadRequestBuilder
	 */
	public static function builder(): ReadRequestBuilder
	{
		return new ReadRequestBuilder();
	}
}
