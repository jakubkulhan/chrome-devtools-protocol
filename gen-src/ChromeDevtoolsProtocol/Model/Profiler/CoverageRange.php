<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Coverage data for a source range.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CoverageRange implements \JsonSerializable
{
	/**
	 * JavaScript script source offset for the range start.
	 *
	 * @var int
	 */
	public $startOffset;

	/**
	 * JavaScript script source offset for the range end.
	 *
	 * @var int
	 */
	public $endOffset;

	/**
	 * Collected execution count of the source range.
	 *
	 * @var int
	 */
	public $count;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->startOffset)) {
			$instance->startOffset = (int)$data->startOffset;
		}
		if (isset($data->endOffset)) {
			$instance->endOffset = (int)$data->endOffset;
		}
		if (isset($data->count)) {
			$instance->count = (int)$data->count;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->startOffset !== null) {
			$data->startOffset = $this->startOffset;
		}
		if ($this->endOffset !== null) {
			$data->endOffset = $this->endOffset;
		}
		if ($this->count !== null) {
			$data->count = $this->count;
		}
		return $data;
	}
}
