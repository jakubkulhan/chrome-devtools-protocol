<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Session event details specific to creation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreationEventDetails implements \JsonSerializable
{
	/**
	 * The result of the fetch attempt.
	 *
	 * @var string
	 */
	public $fetchResult;

	/**
	 * The session if there was a newly created session. This is populated for all successful creation events.
	 *
	 * @var DeviceBoundSession|null
	 */
	public $newSession;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->fetchResult)) {
			$instance->fetchResult = (string)$data->fetchResult;
		}
		if (isset($data->newSession)) {
			$instance->newSession = DeviceBoundSession::fromJson($data->newSession);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->fetchResult !== null) {
			$data->fetchResult = $this->fetchResult;
		}
		if ($this->newSession !== null) {
			$data->newSession = $this->newSession->jsonSerialize();
		}
		return $data;
	}
}
