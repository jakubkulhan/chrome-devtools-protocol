<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setAttachDebugStack command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttachDebugStackRequest implements \JsonSerializable
{
	/**
	 * Whether to attach a page script stack for debugging purpose.
	 *
	 * @var bool
	 */
	public $enabled;


	/**
	 * @param object $data
	 * @return static
	 */
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
	 * @return SetAttachDebugStackRequestBuilder
	 */
	public static function builder(): SetAttachDebugStackRequestBuilder
	{
		return new SetAttachDebugStackRequestBuilder();
	}
}
