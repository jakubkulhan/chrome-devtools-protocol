<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.cancelDownload command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CancelDownloadRequest implements \JsonSerializable
{
	/**
	 * Global unique identifier of the download.
	 *
	 * @var string
	 */
	public $guid;

	/**
	 * BrowserContext to perform the action in. When omitted, default browser context is used.
	 *
	 * @var string
	 */
	public $browserContextId;


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
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->guid !== null) {
			$data->guid = $this->guid;
		}
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CancelDownloadRequestBuilder
	 */
	public static function builder(): CancelDownloadRequestBuilder
	{
		return new CancelDownloadRequestBuilder();
	}
}
