<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Text range within a resource. All numbers are zero-based.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SourceRange implements \JsonSerializable
{
	/**
	 * Start line of range.
	 *
	 * @var int
	 */
	public $startLine;

	/**
	 * Start column of range (inclusive).
	 *
	 * @var int
	 */
	public $startColumn;

	/**
	 * End line of range
	 *
	 * @var int
	 */
	public $endLine;

	/**
	 * End column of range (exclusive).
	 *
	 * @var int
	 */
	public $endColumn;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->startLine)) {
			$instance->startLine = (int)$data->startLine;
		}
		if (isset($data->startColumn)) {
			$instance->startColumn = (int)$data->startColumn;
		}
		if (isset($data->endLine)) {
			$instance->endLine = (int)$data->endLine;
		}
		if (isset($data->endColumn)) {
			$instance->endColumn = (int)$data->endColumn;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->startLine !== null) {
			$data->startLine = $this->startLine;
		}
		if ($this->startColumn !== null) {
			$data->startColumn = $this->startColumn;
		}
		if ($this->endLine !== null) {
			$data->endLine = $this->endLine;
		}
		if ($this->endColumn !== null) {
			$data->endColumn = $this->endColumn;
		}
		return $data;
	}
}
