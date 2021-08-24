<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getAppId command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAppIdResponse implements \JsonSerializable
{
	/**
	 * Only returns a value if the feature flag 'WebAppEnableManifestId' is enabled
	 *
	 * @var string|null
	 */
	public $appId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->appId)) {
			$instance->appId = (string)$data->appId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->appId !== null) {
			$data->appId = $this->appId;
		}
		return $data;
	}
}
