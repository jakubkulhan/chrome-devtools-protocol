<?php

namespace ChromeDevtoolsProtocol\Model\CrashReportContext;

/**
 * Key-value pair in CrashReportContext.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CrashReportContextEntry implements \JsonSerializable
{
	/** @var string */
	public $key;

	/** @var string */
	public $value;

	/**
	 * The ID of the frame where the key-value pair was set.
	 *
	 * @var string
	 */
	public $frameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = (string)$data->key;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}
}
