<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Response to Animation.getPlaybackRate command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPlaybackRateResponse implements \JsonSerializable
{
	/**
	 * Playback rate for animations on page.
	 *
	 * @var int|float
	 */
	public $playbackRate;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->playbackRate)) {
			$instance->playbackRate = $data->playbackRate;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->playbackRate !== null) {
			$data->playbackRate = $this->playbackRate;
		}
		return $data;
	}
}
