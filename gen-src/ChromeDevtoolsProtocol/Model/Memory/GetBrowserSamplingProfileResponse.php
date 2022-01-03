<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * Response to Memory.getBrowserSamplingProfile command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetBrowserSamplingProfileResponse implements \JsonSerializable
{
	/** @var SamplingProfile */
	public $profile;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->profile)) {
			$instance->profile = SamplingProfile::fromJson($data->profile);
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
