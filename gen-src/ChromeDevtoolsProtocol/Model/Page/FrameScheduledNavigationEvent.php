<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when frame schedules a potential navigation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameScheduledNavigationEvent implements \JsonSerializable
{
	/**
	 * Id of the frame that has scheduled a navigation.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Delay (in seconds) until the navigation is scheduled to begin. The navigation is not guaranteed to start.
	 *
	 * @var int|float
	 */
	public $delay;

	/**
	 * The reason for the navigation.
	 *
	 * @var string
	 */
	public $reason;

	/**
	 * The destination URL for the scheduled navigation.
	 *
	 * @var string
	 */
	public $url;


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
		if (isset($data->delay)) {
			$instance->delay = $data->delay;
		}
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->delay !== null) {
			$data->delay = $this->delay;
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		return $data;
	}
}
