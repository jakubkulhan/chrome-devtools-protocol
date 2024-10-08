<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setTimezoneOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTimezoneOverrideRequest implements \JsonSerializable
{
	/**
	 * The timezone identifier. List of supported timezones: https://source.chromium.org/chromium/chromium/deps/icu.git/+/faee8bc70570192d82d2978a71e2a615788597d1:source/data/misc/metaZones.txt If empty, disables the override and restores default host system timezone.
	 *
	 * @var string
	 */
	public $timezoneId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->timezoneId)) {
			$instance->timezoneId = (string)$data->timezoneId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->timezoneId !== null) {
			$data->timezoneId = $this->timezoneId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetTimezoneOverrideRequestBuilder
	 */
	public static function builder(): SetTimezoneOverrideRequestBuilder
	{
		return new SetTimezoneOverrideRequestBuilder();
	}
}
