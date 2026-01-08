<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Unique identifier for a device bound session.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSessionKey implements \JsonSerializable
{
	/**
	 * The site the session is set up for.
	 *
	 * @var string
	 */
	public $site;

	/**
	 * The id of the session.
	 *
	 * @var string
	 */
	public $id;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->site)) {
			$instance->site = (string)$data->site;
		}
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->site !== null) {
			$data->site = $this->site;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		return $data;
	}
}
