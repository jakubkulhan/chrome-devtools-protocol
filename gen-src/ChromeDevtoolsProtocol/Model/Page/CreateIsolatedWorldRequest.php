<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.createIsolatedWorld command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateIsolatedWorldRequest implements \JsonSerializable
{
	/**
	 * Id of the frame in which the isolated world should be created.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * An optional name which is reported in the Execution Context.
	 *
	 * @var string|null
	 */
	public $worldName;

	/**
	 * Whether or not universal access should be granted to the isolated world. This is a powerful option, use with caution.
	 *
	 * @var bool|null
	 */
	public $grantUniveralAccess;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->worldName)) {
			$instance->worldName = (string)$data->worldName;
		}
		if (isset($data->grantUniveralAccess)) {
			$instance->grantUniveralAccess = (bool)$data->grantUniveralAccess;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->worldName !== null) {
			$data->worldName = $this->worldName;
		}
		if ($this->grantUniveralAccess !== null) {
			$data->grantUniveralAccess = $this->grantUniveralAccess;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CreateIsolatedWorldRequestBuilder
	 */
	public static function builder(): CreateIsolatedWorldRequestBuilder
	{
		return new CreateIsolatedWorldRequestBuilder();
	}
}
