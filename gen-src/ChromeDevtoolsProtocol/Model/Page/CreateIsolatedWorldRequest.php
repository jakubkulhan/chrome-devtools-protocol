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
	 * An optional content security policy to set for the isolated world. If omitted, any existing CSP for the world will be cleared. Note that clearing or updating the CSP does not immediately affect the active context in the same document because LocalDOMWindow caches the ContentSecurityPolicy object. The change takes effect on subsequent navigations when a new window context is created.
	 *
	 * @var string|null
	 */
	public $contentSecurityPolicy;


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
		if (isset($data->contentSecurityPolicy)) {
			$instance->contentSecurityPolicy = (string)$data->contentSecurityPolicy;
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
		if ($this->contentSecurityPolicy !== null) {
			$data->contentSecurityPolicy = $this->contentSecurityPolicy;
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
