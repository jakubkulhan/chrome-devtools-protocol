<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Navigation history entry.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NavigationEntry implements \JsonSerializable
{
	/**
	 * Unique id of the navigation history entry.
	 *
	 * @var int
	 */
	public $id;

	/**
	 * URL of the navigation history entry.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * URL that the user typed in the url bar.
	 *
	 * @var string
	 */
	public $userTypedURL;

	/**
	 * Title of the navigation history entry.
	 *
	 * @var string
	 */
	public $title;

	/**
	 * Transition type.
	 *
	 * @var string
	 */
	public $transitionType;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (int)$data->id;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->userTypedURL)) {
			$instance->userTypedURL = (string)$data->userTypedURL;
		}
		if (isset($data->title)) {
			$instance->title = (string)$data->title;
		}
		if (isset($data->transitionType)) {
			$instance->transitionType = (string)$data->transitionType;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->userTypedURL !== null) {
			$data->userTypedURL = $this->userTypedURL;
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		if ($this->transitionType !== null) {
			$data->transitionType = $this->transitionType;
		}
		return $data;
	}
}
