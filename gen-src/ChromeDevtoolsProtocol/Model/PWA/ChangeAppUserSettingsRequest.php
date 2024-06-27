<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Request for PWA.changeAppUserSettings command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ChangeAppUserSettingsRequest implements \JsonSerializable
{
	/** @var string */
	public $manifestId;

	/**
	 * If user allows the links clicked on by the user in the app's scope, or extended scope if the manifest has scope extensions and the flags `DesktopPWAsLinkCapturingWithScopeExtensions` and `WebAppEnableScopeExtensions` are enabled. Note, the API does not support resetting the linkCapturing to the initial value, uninstalling and installing the web app again will reset it. TODO(crbug.com/339453269): Setting this value on ChromeOS is not supported yet.
	 *
	 * @var bool|null
	 */
	public $linkCapturing;

	/** @var string */
	public $displayMode;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->manifestId)) {
			$instance->manifestId = (string)$data->manifestId;
		}
		if (isset($data->linkCapturing)) {
			$instance->linkCapturing = (bool)$data->linkCapturing;
		}
		if (isset($data->displayMode)) {
			$instance->displayMode = (string)$data->displayMode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->manifestId !== null) {
			$data->manifestId = $this->manifestId;
		}
		if ($this->linkCapturing !== null) {
			$data->linkCapturing = $this->linkCapturing;
		}
		if ($this->displayMode !== null) {
			$data->displayMode = $this->displayMode;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ChangeAppUserSettingsRequestBuilder
	 */
	public static function builder(): ChangeAppUserSettingsRequestBuilder
	{
		return new ChangeAppUserSettingsRequestBuilder();
	}
}
