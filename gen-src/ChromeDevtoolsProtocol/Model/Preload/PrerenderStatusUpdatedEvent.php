<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Fired when a prerender attempt is updated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrerenderStatusUpdatedEvent implements \JsonSerializable
{
	/**
	 * The frame id of the frame initiating prerender.
	 *
	 * @var string
	 */
	public $initiatingFrameId;

	/** @var string */
	public $prerenderingUrl;

	/** @var string */
	public $status;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->initiatingFrameId)) {
			$instance->initiatingFrameId = (string)$data->initiatingFrameId;
		}
		if (isset($data->prerenderingUrl)) {
			$instance->prerenderingUrl = (string)$data->prerenderingUrl;
		}
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->initiatingFrameId !== null) {
			$data->initiatingFrameId = $this->initiatingFrameId;
		}
		if ($this->prerenderingUrl !== null) {
			$data->prerenderingUrl = $this->prerenderingUrl;
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		return $data;
	}
}
