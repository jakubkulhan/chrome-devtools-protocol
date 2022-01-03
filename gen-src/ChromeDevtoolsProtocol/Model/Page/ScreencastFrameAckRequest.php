<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.screencastFrameAck command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreencastFrameAckRequest implements \JsonSerializable
{
	/**
	 * Frame number.
	 *
	 * @var int
	 */
	public $sessionId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sessionId)) {
			$instance->sessionId = (int)$data->sessionId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->sessionId !== null) {
			$data->sessionId = $this->sessionId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ScreencastFrameAckRequestBuilder
	 */
	public static function builder(): ScreencastFrameAckRequestBuilder
	{
		return new ScreencastFrameAckRequestBuilder();
	}
}
