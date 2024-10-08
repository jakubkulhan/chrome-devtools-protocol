<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.SourceCodeLocation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SourceCodeLocation implements \JsonSerializable
{
	/** @var string */
	public $scriptId;

	/** @var string */
	public $url;

	/** @var int */
	public $lineNumber;

	/** @var int */
	public $columnNumber;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
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
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
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
