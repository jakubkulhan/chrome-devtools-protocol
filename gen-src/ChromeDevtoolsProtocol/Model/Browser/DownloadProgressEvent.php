<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Fired when download makes progress. Last call has |done| == true.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DownloadProgressEvent implements \JsonSerializable
{
	/**
	 * Global unique identifier of the download.
	 *
	 * @var string
	 */
	public $guid;

	/**
	 * Total expected bytes to download.
	 *
	 * @var int|float
	 */
	public $totalBytes;

	/**
	 * Total bytes received.
	 *
	 * @var int|float
	 */
	public $receivedBytes;

	/**
	 * Download status.
	 *
	 * @var string
	 */
	public $state;

	/**
	 * If download is "completed", provides the path of the downloaded file. Depending on the platform, it is not guaranteed to be set, nor the file is guaranteed to exist.
	 *
	 * @var string|null
	 */
	public $filePath;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->guid)) {
			$instance->guid = (string)$data->guid;
		}
		if (isset($data->totalBytes)) {
			$instance->totalBytes = $data->totalBytes;
		}
		if (isset($data->receivedBytes)) {
			$instance->receivedBytes = $data->receivedBytes;
		}
		if (isset($data->state)) {
			$instance->state = (string)$data->state;
		}
		if (isset($data->filePath)) {
			$instance->filePath = (string)$data->filePath;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->guid !== null) {
			$data->guid = $this->guid;
		}
		if ($this->totalBytes !== null) {
			$data->totalBytes = $this->totalBytes;
		}
		if ($this->receivedBytes !== null) {
			$data->receivedBytes = $this->receivedBytes;
		}
		if ($this->state !== null) {
			$data->state = $this->state;
		}
		if ($this->filePath !== null) {
			$data->filePath = $this->filePath;
		}
		return $data;
	}
}
