<?php

namespace ChromeDevtoolsProtocol\Model\Console;

/**
 * Console message.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ConsoleMessage implements \JsonSerializable
{
	/**
	 * Message source.
	 *
	 * @var string
	 */
	public $source;

	/**
	 * Message severity.
	 *
	 * @var string
	 */
	public $level;

	/**
	 * Message text.
	 *
	 * @var string
	 */
	public $text;

	/**
	 * URL of the message origin.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * Line number in the resource that generated this message (1-based).
	 *
	 * @var int|null
	 */
	public $line;

	/**
	 * Column number in the resource that generated this message (1-based).
	 *
	 * @var int|null
	 */
	public $column;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		if (isset($data->level)) {
			$instance->level = (string)$data->level;
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
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
		if ($this->source !== null) {
			$data->source = $this->source;
		}
		if ($this->level !== null) {
			$data->level = $this->level;
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
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
