<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.canClearBrowserCookies command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CanClearBrowserCookiesResponse implements \JsonSerializable
{
	/**
	 * True if browser cookies can be cleared.
	 *
	 * @var bool
	 */
	public $result;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->result)) {
			$instance->result = (bool)$data->result;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->result !== null) {
			$data->result = $this->result;
		}
		return $data;
	}
}
