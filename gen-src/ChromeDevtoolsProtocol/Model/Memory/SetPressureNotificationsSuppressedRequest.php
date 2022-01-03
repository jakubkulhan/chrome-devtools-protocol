<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * Request for Memory.setPressureNotificationsSuppressed command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPressureNotificationsSuppressedRequest implements \JsonSerializable
{
	/**
	 * If true, memory pressure notifications will be suppressed.
	 *
	 * @var bool
	 */
	public $suppressed;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->suppressed)) {
			$instance->suppressed = (bool)$data->suppressed;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->suppressed !== null) {
			$data->suppressed = $this->suppressed;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPressureNotificationsSuppressedRequestBuilder
	 */
	public static function builder(): SetPressureNotificationsSuppressedRequestBuilder
	{
		return new SetPressureNotificationsSuppressedRequestBuilder();
	}
}
