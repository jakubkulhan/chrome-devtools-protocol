<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.insertText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InsertTextRequest implements \JsonSerializable
{
	/**
	 * The text to insert.
	 *
	 * @var string
	 */
	public $text;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return InsertTextRequestBuilder
	 */
	public static function builder(): InsertTextRequestBuilder
	{
		return new InsertTextRequestBuilder();
	}
}
