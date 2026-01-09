<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Session event details specific to termination.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TerminationEventDetails implements \JsonSerializable
{
	/**
	 * The reason for a session being deleted.
	 *
	 * @var string
	 */
	public $deletionReason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->deletionReason)) {
			$instance->deletionReason = (string)$data->deletionReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->deletionReason !== null) {
			$data->deletionReason = $this->deletionReason;
		}
		return $data;
	}
}
