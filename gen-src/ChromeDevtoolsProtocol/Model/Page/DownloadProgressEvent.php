<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when download makes progress. Last call has |done| == true. Deprecated. Use Browser.downloadProgress instead.
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
		return $instance;
	}


	public function jsonSerialize(): mixed
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
		return $data;
	}
}
