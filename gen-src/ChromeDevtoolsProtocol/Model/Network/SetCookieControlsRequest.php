<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setCookieControls command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCookieControlsRequest implements \JsonSerializable
{
	/**
	 * Whether 3pc restriction is enabled.
	 *
	 * @var bool
	 */
	public $enableThirdPartyCookieRestriction;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enableThirdPartyCookieRestriction)) {
			$instance->enableThirdPartyCookieRestriction = (bool)$data->enableThirdPartyCookieRestriction;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enableThirdPartyCookieRestriction !== null) {
			$data->enableThirdPartyCookieRestriction = $this->enableThirdPartyCookieRestriction;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetCookieControlsRequestBuilder
	 */
	public static function builder(): SetCookieControlsRequestBuilder
	{
		return new SetCookieControlsRequestBuilder();
	}
}
