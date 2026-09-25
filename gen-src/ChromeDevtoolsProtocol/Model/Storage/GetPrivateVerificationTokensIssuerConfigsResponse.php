<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.getPrivateVerificationTokensIssuerConfigs command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPrivateVerificationTokensIssuerConfigsResponse implements \JsonSerializable
{
	/** @var PrivateVerificationTokensIssuerConfig[] */
	public $configs;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->configs)) {
			$instance->configs = [];
			foreach ($data->configs as $item) {
				$instance->configs[] = PrivateVerificationTokensIssuerConfig::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->configs !== null) {
			$data->configs = [];
			foreach ($this->configs as $item) {
				$data->configs[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
