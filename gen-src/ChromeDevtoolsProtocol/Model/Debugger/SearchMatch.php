<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Search match for resource.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SearchMatch implements \JsonSerializable
{
	/**
	 * Line number in resource content.
	 *
	 * @var int|float
	 */
	public $lineNumber;

	/**
	 * Line with match content.
	 *
	 * @var string
	 */
	public $lineContent;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->lineNumber)) {
			$instance->lineNumber = $data->lineNumber;
		}
		if (isset($data->lineContent)) {
			$instance->lineContent = (string)$data->lineContent;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->lineNumber !== null) {
			$data->lineNumber = $this->lineNumber;
		}
		if ($this->lineContent !== null) {
			$data->lineContent = $this->lineContent;
		}
		return $data;
	}
}
