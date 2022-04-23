<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * Represents logged source line numbers reported in an error. NOTE: file and line are from chromium c++ implementation code, not js.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlayerErrorSourceLocation implements \JsonSerializable
{
	/** @var string */
	public $file;

	/** @var int */
	public $line;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->file)) {
			$instance->file = (string)$data->file;
		}
		if (isset($data->line)) {
			$instance->line = (int)$data->line;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->file !== null) {
			$data->file = $this->file;
		}
		if ($this->line !== null) {
			$data->line = $this->line;
		}
		return $data;
	}
}
