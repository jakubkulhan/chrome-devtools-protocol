<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Private Verification Tokens have been stored or deleted.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrivateVerificationTokensUpdatedEvent implements \JsonSerializable
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
