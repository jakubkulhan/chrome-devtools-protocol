<?php
namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.setAttachToFrames command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttachToFramesRequest implements \JsonSerializable
{
	/**
	 * Whether to attach to frames.
	 *
	 * @var bool
	 */
	public $value;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->value)) {
			$instance->value = (bool)$data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAttachToFramesRequestBuilder
	 */
	public static function builder(): SetAttachToFramesRequestBuilder
	{
		return new SetAttachToFramesRequestBuilder();
	}
}
