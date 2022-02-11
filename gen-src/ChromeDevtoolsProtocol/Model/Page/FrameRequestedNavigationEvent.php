<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when a renderer-initiated navigation is requested. Navigation may still be cancelled after the event is issued.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameRequestedNavigationEvent implements \JsonSerializable
{
	/**
	 * Id of the frame that is being navigated.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * The reason for the navigation.
	 *
	 * @var string
	 */
	public $reason;

	/**
	 * The destination URL for the requested navigation.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * The disposition for the navigation.
	 *
	 * @var string
	 */
	public $disposition;


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
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->disposition)) {
			$instance->disposition = (string)$data->disposition;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->disposition !== null) {
			$data->disposition = $this->disposition;
		}
		return $data;
	}
}
