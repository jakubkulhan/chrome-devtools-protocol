<?php
namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setEmulatedMedia command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEmulatedMediaRequest implements \JsonSerializable
{
	/**
	 * Media type to emulate. Empty string disables the override.
	 *
	 * @var string
	 */
	public $media;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->media)) {
			$instance->media = (string)$data->media;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->media !== null) {
			$data->media = $this->media;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetEmulatedMediaRequestBuilder
	 */
	public static function builder(): SetEmulatedMediaRequestBuilder
	{
		return new SetEmulatedMediaRequestBuilder();
	}
}
