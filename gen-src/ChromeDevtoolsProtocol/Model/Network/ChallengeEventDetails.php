<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Session event details specific to challenges.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ChallengeEventDetails implements \JsonSerializable
{
	/**
	 * The result of a challenge.
	 *
	 * @var string
	 */
	public $challengeResult;

	/**
	 * The challenge set.
	 *
	 * @var string
	 */
	public $challenge;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->challengeResult)) {
			$instance->challengeResult = (string)$data->challengeResult;
		}
		if (isset($data->challenge)) {
			$instance->challenge = (string)$data->challenge;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->challengeResult !== null) {
			$data->challengeResult = $this->challengeResult;
		}
		if ($this->challenge !== null) {
			$data->challenge = $this->challenge;
		}
		return $data;
	}
}
