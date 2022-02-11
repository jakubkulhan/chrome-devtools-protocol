<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Response to Tracing.requestMemoryDump command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestMemoryDumpResponse implements \JsonSerializable
{
	/**
	 * GUID of the resulting global memory dump.
	 *
	 * @var string
	 */
	public $dumpGuid;

	/**
	 * True iff the global memory dump succeeded.
	 *
	 * @var bool
	 */
	public $success;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->dumpGuid)) {
			$instance->dumpGuid = (string)$data->dumpGuid;
		}
		if (isset($data->success)) {
			$instance->success = (bool)$data->success;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dumpGuid !== null) {
			$data->dumpGuid = $this->dumpGuid;
		}
		if ($this->success !== null) {
			$data->success = $this->success;
		}
		return $data;
	}
}
