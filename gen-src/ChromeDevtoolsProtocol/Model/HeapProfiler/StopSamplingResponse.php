<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Response to HeapProfiler.stopSampling command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StopSamplingResponse implements \JsonSerializable
{
	/**
	 * Recorded sampling heap profile.
	 *
	 * @var SamplingHeapProfile
	 */
	public $profile;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->profile)) {
			$instance->profile = SamplingHeapProfile::fromJson($data->profile);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->profile !== null) {
			$data->profile = $this->profile->jsonSerialize();
		}
		return $data;
	}
}
