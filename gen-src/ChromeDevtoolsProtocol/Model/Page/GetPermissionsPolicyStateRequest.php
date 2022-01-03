<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.getPermissionsPolicyState command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPermissionsPolicyStateRequest implements \JsonSerializable
{
	/** @var string */
	public $frameId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetPermissionsPolicyStateRequestBuilder
	 */
	public static function builder(): GetPermissionsPolicyStateRequestBuilder
	{
		return new GetPermissionsPolicyStateRequestBuilder();
	}
}
