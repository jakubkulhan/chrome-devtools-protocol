<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.getFileInfo command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFileInfoResponse implements \JsonSerializable
{
	/** @var string */
	public $path;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->path)) {
			$instance->path = (string)$data->path;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->path !== null) {
			$data->path = $this->path;
		}
		return $data;
	}
}
