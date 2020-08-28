<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setAttachDebugHeader command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttachDebugHeaderRequest implements \JsonSerializable
{
	/**
	 * Whether to send a debug header.
	 *
	 * @var bool
	 */
	public $enabled;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAttachDebugHeaderRequestBuilder
	 */
	public static function builder(): SetAttachDebugHeaderRequestBuilder
	{
		return new SetAttachDebugHeaderRequestBuilder();
	}
}
