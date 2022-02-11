<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.setDownloadBehavior command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDownloadBehaviorRequest implements \JsonSerializable
{
	/**
	 * Whether to allow all or deny all download requests, or use default Chrome behavior if available (otherwise deny). |allowAndName| allows download and names files according to their dowmload guids.
	 *
	 * @var string
	 */
	public $behavior;

	/**
	 * BrowserContext to set download behavior. When omitted, default browser context is used.
	 *
	 * @var string
	 */
	public $browserContextId;

	/**
	 * The default path to save downloaded files to. This is required if behavior is set to 'allow' or 'allowAndName'.
	 *
	 * @var string|null
	 */
	public $downloadPath;

	/**
	 * Whether to emit download events (defaults to false).
	 *
	 * @var bool|null
	 */
	public $eventsEnabled;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->behavior)) {
			$instance->behavior = (string)$data->behavior;
		}
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
		}
		if (isset($data->downloadPath)) {
			$instance->downloadPath = (string)$data->downloadPath;
		}
		if (isset($data->eventsEnabled)) {
			$instance->eventsEnabled = (bool)$data->eventsEnabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->behavior !== null) {
			$data->behavior = $this->behavior;
		}
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		if ($this->downloadPath !== null) {
			$data->downloadPath = $this->downloadPath;
		}
		if ($this->eventsEnabled !== null) {
			$data->eventsEnabled = $this->eventsEnabled;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDownloadBehaviorRequestBuilder
	 */
	public static function builder(): SetDownloadBehaviorRequestBuilder
	{
		return new SetDownloadBehaviorRequestBuilder();
	}
}
