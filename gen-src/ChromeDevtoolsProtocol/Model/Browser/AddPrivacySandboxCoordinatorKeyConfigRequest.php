<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.addPrivacySandboxCoordinatorKeyConfig command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddPrivacySandboxCoordinatorKeyConfigRequest implements \JsonSerializable
{
	/** @var string */
	public $api;

	/** @var string */
	public $coordinatorOrigin;

	/** @var string */
	public $keyConfig;

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
		if (isset($data->api)) {
			$instance->api = (string)$data->api;
		}
		if (isset($data->coordinatorOrigin)) {
			$instance->coordinatorOrigin = (string)$data->coordinatorOrigin;
		}
		if (isset($data->keyConfig)) {
			$instance->keyConfig = (string)$data->keyConfig;
		}
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->api !== null) {
			$data->api = $this->api;
		}
		if ($this->coordinatorOrigin !== null) {
			$data->coordinatorOrigin = $this->coordinatorOrigin;
		}
		if ($this->keyConfig !== null) {
			$data->keyConfig = $this->keyConfig;
		}
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddPrivacySandboxCoordinatorKeyConfigRequestBuilder
	 */
	public static function builder(): AddPrivacySandboxCoordinatorKeyConfigRequestBuilder
	{
		return new AddPrivacySandboxCoordinatorKeyConfigRequestBuilder();
	}
}
