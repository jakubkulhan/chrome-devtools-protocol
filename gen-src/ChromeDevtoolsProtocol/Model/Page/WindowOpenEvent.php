<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when a new window is going to be opened, via window.open(), link click, form submission, etc.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WindowOpenEvent implements \JsonSerializable
{
	/**
	 * The URL for the new window.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Window name.
	 *
	 * @var string
	 */
	public $windowName;

	/**
	 * An array of enabled window features.
	 *
	 * @var string[]
	 */
	public $windowFeatures;

	/**
	 * Whether or not it was triggered by user gesture.
	 *
	 * @var bool
	 */
	public $userGesture;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->windowName)) {
			$instance->windowName = (string)$data->windowName;
		}
		if (isset($data->windowFeatures)) {
			$instance->windowFeatures = [];
			foreach ($data->windowFeatures as $item) {
				$instance->windowFeatures[] = (string)$item;
			}
		}
		if (isset($data->userGesture)) {
			$instance->userGesture = (bool)$data->userGesture;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->windowName !== null) {
			$data->windowName = $this->windowName;
		}
		if ($this->windowFeatures !== null) {
			$data->windowFeatures = [];
			foreach ($this->windowFeatures as $item) {
				$data->windowFeatures[] = $item;
			}
		}
		if ($this->userGesture !== null) {
			$data->userGesture = $this->userGesture;
		}
		return $data;
	}
}
