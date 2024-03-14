<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.getInterestGroupDetails command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetInterestGroupDetailsResponse implements \JsonSerializable
{
	/**
	 * This largely corresponds to: https://wicg.github.io/turtledove/#dictdef-generatebidinterestgroup but has absolute expirationTime instead of relative lifetimeMs and also adds joiningOrigin.
	 *
	 * @var object
	 */
	public $details;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->details)) {
			$instance->details = $data->details;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->details !== null) {
			$data->details = $this->details;
		}
		return $data;
	}
}
