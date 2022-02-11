<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when page is about to start a download. Deprecated. Use Browser.downloadWillBegin instead.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DownloadWillBeginEvent implements \JsonSerializable
{
	/**
	 * Id of the frame that caused download to begin.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Global unique identifier of the download.
	 *
	 * @var string
	 */
	public $guid;

	/**
	 * URL of the resource being downloaded.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Suggested file name of the resource (the actual name of the file saved on disk may differ).
	 *
	 * @var string
	 */
	public $suggestedFilename;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->guid)) {
			$instance->guid = (string)$data->guid;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->suggestedFilename)) {
			$instance->suggestedFilename = (string)$data->suggestedFilename;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->guid !== null) {
			$data->guid = $this->guid;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->suggestedFilename !== null) {
			$data->suggestedFilename = $this->suggestedFilename;
		}
		return $data;
	}
}
