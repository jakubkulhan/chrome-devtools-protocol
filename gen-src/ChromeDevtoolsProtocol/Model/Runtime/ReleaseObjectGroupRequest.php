<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.releaseObjectGroup command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReleaseObjectGroupRequest implements \JsonSerializable
{
	/**
	 * Symbolic object group name.
	 *
	 * @var string
	 */
	public $objectGroup;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->objectGroup)) {
			$instance->objectGroup = (string)$data->objectGroup;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->objectGroup !== null) {
			$data->objectGroup = $this->objectGroup;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReleaseObjectGroupRequestBuilder
	 */
	public static function builder(): ReleaseObjectGroupRequestBuilder
	{
		return new ReleaseObjectGroupRequestBuilder();
	}
}
