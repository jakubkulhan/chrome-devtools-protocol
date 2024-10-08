<?php

namespace ChromeDevtoolsProtocol\Model\Inspector;

/**
 * Fired when remote debugging connection is about to be terminated. Contains detach reason.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DetachedEvent implements \JsonSerializable
{
	/**
	 * The reason why connection has been terminated.
	 *
	 * @var string
	 */
	public $reason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		return $data;
	}
}
