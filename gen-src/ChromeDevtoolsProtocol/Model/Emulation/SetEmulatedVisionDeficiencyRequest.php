<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setEmulatedVisionDeficiency command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEmulatedVisionDeficiencyRequest implements \JsonSerializable
{
	/**
	 * Vision deficiency to emulate.
	 *
	 * @var string
	 */
	public $type;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetEmulatedVisionDeficiencyRequestBuilder
	 */
	public static function builder(): SetEmulatedVisionDeficiencyRequestBuilder
	{
		return new SetEmulatedVisionDeficiencyRequestBuilder();
	}
}
