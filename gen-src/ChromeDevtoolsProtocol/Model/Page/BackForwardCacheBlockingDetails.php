<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.BackForwardCacheBlockingDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BackForwardCacheBlockingDetails implements \JsonSerializable
{
	/**
	 * Url of the file where blockage happened. Optional because of tests.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * Function name where blockage happened. Optional because of anonymous functions and tests.
	 *
	 * @var string|null
	 */
	public $function;

	/**
	 * Line number in the script (0-based).
	 *
	 * @var int
	 */
	public $lineNumber;

	/**
	 * Column number in the script (0-based).
	 *
	 * @var int
	 */
	public $columnNumber;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->function)) {
			$instance->function = (string)$data->function;
		}
		if (isset($data->lineNumber)) {
			$instance->lineNumber = (int)$data->lineNumber;
		}
		if (isset($data->columnNumber)) {
			$instance->columnNumber = (int)$data->columnNumber;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->function !== null) {
			$data->function = $this->function;
		}
		if ($this->lineNumber !== null) {
			$data->lineNumber = $this->lineNumber;
		}
		if ($this->columnNumber !== null) {
			$data->columnNumber = $this->columnNumber;
		}
		return $data;
	}
}
