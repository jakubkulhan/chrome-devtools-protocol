<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Error while paring app manifest.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AppManifestError implements \JsonSerializable
{
	/**
	 * Error message.
	 *
	 * @var string
	 */
	public $message;

	/**
	 * If criticial, this is a non-recoverable parse error.
	 *
	 * @var int
	 */
	public $critical;

	/**
	 * Error line.
	 *
	 * @var int
	 */
	public $line;

	/**
	 * Error column.
	 *
	 * @var int
	 */
	public $column;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		if (isset($data->critical)) {
			$instance->critical = (int)$data->critical;
		}
		if (isset($data->line)) {
			$instance->line = (int)$data->line;
		}
		if (isset($data->column)) {
			$instance->column = (int)$data->column;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		if ($this->critical !== null) {
			$data->critical = $this->critical;
		}
		if ($this->line !== null) {
			$data->line = $this->line;
		}
		if ($this->column !== null) {
			$data->column = $this->column;
		}
		return $data;
	}
}
