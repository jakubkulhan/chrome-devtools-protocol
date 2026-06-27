<?php

namespace ChromeDevtoolsProtocol\Model\Ads;

/**
 * Ad frame data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AdFrameData implements \JsonSerializable
{
	/**
	 * The DevTools frame token.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * The initial origin of the frame. To minimize the payload size, this is only sent once per frame.
	 *
	 * @var string|null
	 */
	public $initialOrigin;

	/**
	 * The network bytes of the frame.
	 *
	 * @var int|float
	 */
	public $networkBytes;

	/**
	 * The CPU time of the frame, in milliseconds.
	 *
	 * @var int|float
	 */
	public $cpuTime;


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
		if (isset($data->initialOrigin)) {
			$instance->initialOrigin = (string)$data->initialOrigin;
		}
		if (isset($data->networkBytes)) {
			$instance->networkBytes = $data->networkBytes;
		}
		if (isset($data->cpuTime)) {
			$instance->cpuTime = $data->cpuTime;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->initialOrigin !== null) {
			$data->initialOrigin = $this->initialOrigin;
		}
		if ($this->networkBytes !== null) {
			$data->networkBytes = $this->networkBytes;
		}
		if ($this->cpuTime !== null) {
			$data->cpuTime = $this->cpuTime;
		}
		return $data;
	}
}
