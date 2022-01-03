<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.setMaxCallStackSizeToCapture command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetMaxCallStackSizeToCaptureRequest implements \JsonSerializable
{
	/** @var int */
	public $size;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->size)) {
			$instance->size = (int)$data->size;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetMaxCallStackSizeToCaptureRequestBuilder
	 */
	public static function builder(): SetMaxCallStackSizeToCaptureRequestBuilder
	{
		return new SetMaxCallStackSizeToCaptureRequestBuilder();
	}
}
