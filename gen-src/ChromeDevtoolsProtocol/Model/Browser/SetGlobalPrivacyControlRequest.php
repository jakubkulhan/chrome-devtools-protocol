<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.setGlobalPrivacyControl command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetGlobalPrivacyControlRequest implements \JsonSerializable
{
	/** @var bool */
	public $gpc;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->gpc)) {
			$instance->gpc = (bool)$data->gpc;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->gpc !== null) {
			$data->gpc = $this->gpc;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetGlobalPrivacyControlRequestBuilder
	 */
	public static function builder(): SetGlobalPrivacyControlRequestBuilder
	{
		return new SetGlobalPrivacyControlRequestBuilder();
	}
}
