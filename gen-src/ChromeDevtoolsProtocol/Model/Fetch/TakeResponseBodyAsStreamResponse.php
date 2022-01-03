<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Response to Fetch.takeResponseBodyAsStream command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TakeResponseBodyAsStreamResponse implements \JsonSerializable
{
	/** @var string */
	public $stream;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->stream)) {
			$instance->stream = (string)$data->stream;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->stream !== null) {
			$data->stream = $this->stream;
		}
		return $data;
	}
}
