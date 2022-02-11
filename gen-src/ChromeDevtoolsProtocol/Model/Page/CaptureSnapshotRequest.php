<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.captureSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CaptureSnapshotRequest implements \JsonSerializable
{
	/**
	 * Format (defaults to mhtml).
	 *
	 * @var string|null
	 */
	public $format;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->format)) {
			$instance->format = (string)$data->format;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->format !== null) {
			$data->format = $this->format;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CaptureSnapshotRequestBuilder
	 */
	public static function builder(): CaptureSnapshotRequestBuilder
	{
		return new CaptureSnapshotRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
