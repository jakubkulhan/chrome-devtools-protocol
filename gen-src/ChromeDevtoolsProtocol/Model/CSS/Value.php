<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Data for a simple selector (these are delimited by commas in a selector list).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Value implements \JsonSerializable
{
	/**
	 * Value text.
	 *
	 * @var string
	 */
	public $text;

	/**
	 * Value range in the underlying resource (if available).
	 *
	 * @var SourceRange|null
	 */
	public $range;


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
		if (isset($data->range)) {
			$instance->range = SourceRange::fromJson($data->range);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->range !== null) {
			$data->range = $this->range->jsonSerialize();
		}
		return $data;
	}
}
