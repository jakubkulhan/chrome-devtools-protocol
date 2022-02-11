<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Response to Animation.getCurrentTime command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCurrentTimeResponse implements \JsonSerializable
{
	/**
	 * Current time of the page.
	 *
	 * @var int|float
	 */
	public $currentTime;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->currentTime)) {
			$instance->currentTime = $data->currentTime;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->currentTime !== null) {
			$data->currentTime = $this->currentTime;
		}
		return $data;
	}
}
