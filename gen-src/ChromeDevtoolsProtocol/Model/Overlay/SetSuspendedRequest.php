<?php
namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setSuspended command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSuspendedRequest implements \JsonSerializable
{
	/**
	 * Whether overlay should be suspended and not consume any resources until resumed.
	 *
	 * @var bool
	 */
	public $suspended;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->suspended)) {
			$instance->suspended = (bool)$data->suspended;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->suspended !== null) {
			$data->suspended = $this->suspended;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSuspendedRequestBuilder
	 */
	public static function builder(): SetSuspendedRequestBuilder
	{
		return new SetSuspendedRequestBuilder();
	}
}
