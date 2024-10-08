<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Response to Profiler.stop command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StopResponse implements \JsonSerializable
{
	/**
	 * Recorded profile.
	 *
	 * @var Profile
	 */
	public $profile;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->profile)) {
			$instance->profile = Profile::fromJson($data->profile);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->profile !== null) {
			$data->profile = $this->profile->jsonSerialize();
		}
		return $data;
	}
}
