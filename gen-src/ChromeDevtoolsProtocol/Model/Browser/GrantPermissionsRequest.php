<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.grantPermissions command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GrantPermissionsRequest implements \JsonSerializable
{
	/** @var string[] */
	public $permissions;

	/**
	 * Origin the permission applies to, all origins if not specified.
	 *
	 * @var string|null
	 */
	public $origin;

	/**
	 * BrowserContext to override permissions. When omitted, default browser context is used.
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
		if (isset($data->permissions)) {
			$instance->permissions = [];
		if (isset($data->permissions)) {
			$instance->permissions = [];
			foreach ($data->permissions as $item) {
				$instance->permissions[] = (string)$item;
			}
		}
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
		if ($this->permissions !== null) {
			$data->permissions = [];
		if ($this->permissions !== null) {
			$data->permissions = [];
			foreach ($this->permissions as $item) {
				$data->permissions[] = $item;
			}
		}
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
	 * @return GrantPermissionsRequestBuilder
	 */
	public static function builder(): GrantPermissionsRequestBuilder
	{
		return new GrantPermissionsRequestBuilder();
	}
}
