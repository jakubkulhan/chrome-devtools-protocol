<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Additional information about the frame document's security origin.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SecurityOriginDetails implements \JsonSerializable
{
	/**
	 * Indicates whether the frame document's security origin is one of the local hostnames (e.g. "localhost") or IP addresses (IPv4 127.0.0.0/8 or IPv6 ::1).
	 *
	 * @var bool
	 */
	public $isLocalhost;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->isLocalhost)) {
			$instance->isLocalhost = (bool)$data->isLocalhost;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->isLocalhost !== null) {
			$data->isLocalhost = $this->isLocalhost;
		}
		return $data;
	}
}
