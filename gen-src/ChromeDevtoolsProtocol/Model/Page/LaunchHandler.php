<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.LaunchHandler.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LaunchHandler implements \JsonSerializable
{
	/** @var string */
	public $clientMode;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->clientMode)) {
			$instance->clientMode = (string)$data->clientMode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->clientMode !== null) {
			$data->clientMode = $this->clientMode;
		}
		return $data;
	}
}
