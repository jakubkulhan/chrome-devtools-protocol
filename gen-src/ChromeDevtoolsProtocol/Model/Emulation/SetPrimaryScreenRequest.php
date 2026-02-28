<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setPrimaryScreen command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPrimaryScreenRequest implements \JsonSerializable
{
	/** @var string */
	public $screenId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->screenId)) {
			$instance->screenId = (string)$data->screenId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->screenId !== null) {
			$data->screenId = $this->screenId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPrimaryScreenRequestBuilder
	 */
	public static function builder(): SetPrimaryScreenRequestBuilder
	{
		return new SetPrimaryScreenRequestBuilder();
	}
}
