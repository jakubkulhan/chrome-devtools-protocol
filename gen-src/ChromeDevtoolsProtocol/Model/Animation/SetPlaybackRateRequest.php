<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Request for Animation.setPlaybackRate command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPlaybackRateRequest implements \JsonSerializable
{
	/**
	 * Playback rate for animations on page
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


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPlaybackRateRequestBuilder
	 */
	public static function builder(): SetPlaybackRateRequestBuilder
	{
		return new SetPlaybackRateRequestBuilder();
	}
}
