<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Notification sent after the virtual time budget for the current VirtualTimePolicy has run out.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class VirtualTimeBudgetExpiredEvent implements \JsonSerializable
{
	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		return $data;
	}
}
