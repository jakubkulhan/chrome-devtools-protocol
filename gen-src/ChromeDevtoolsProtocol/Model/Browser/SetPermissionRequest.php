<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.setPermission command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPermissionRequest implements \JsonSerializable
{
	/**
	 * Descriptor of permission to override.
	 *
	 * @var PermissionDescriptor
	 */
	public $permission;

	/**
	 * Setting of the permission.
	 *
	 * @var string
	 */
	public $setting;

	/**
	 * Origin the permission applies to, all origins if not specified.
	 *
	 * @var string|null
	 */
	public $origin;

	/**
	 * Context to override. When omitted, default browser context is used.
	 *
	 * @var string
	 */
	public $browserContextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->permission)) {
			$instance->permission = PermissionDescriptor::fromJson($data->permission);
		}
		if (isset($data->setting)) {
			$instance->setting = (string)$data->setting;
		}
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->permission !== null) {
			$data->permission = $this->permission->jsonSerialize();
		}
		if ($this->setting !== null) {
			$data->setting = $this->setting;
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPermissionRequestBuilder
	 */
	public static function builder(): SetPermissionRequestBuilder
	{
		return new SetPermissionRequestBuilder();
	}
}
