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
	 * Whether 3pc grace period exception should be enabled; false by default.
	 *
	 * @var bool
	 */
	public $disableThirdPartyCookieMetadata;

	/**
	 * Whether 3pc heuristics exceptions should be enabled; false by default.
	 *
	 * @var bool
	 */
	public $disableThirdPartyCookieHeuristics;


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
		if (isset($data->disableThirdPartyCookieMetadata)) {
			$instance->disableThirdPartyCookieMetadata = (bool)$data->disableThirdPartyCookieMetadata;
		}
		if (isset($data->disableThirdPartyCookieHeuristics)) {
			$instance->disableThirdPartyCookieHeuristics = (bool)$data->disableThirdPartyCookieHeuristics;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enableThirdPartyCookieRestriction !== null) {
			$data->enableThirdPartyCookieRestriction = $this->enableThirdPartyCookieRestriction;
		}
		if ($this->disableThirdPartyCookieMetadata !== null) {
			$data->disableThirdPartyCookieMetadata = $this->disableThirdPartyCookieMetadata;
		}
		if ($this->disableThirdPartyCookieHeuristics !== null) {
			$data->disableThirdPartyCookieHeuristics = $this->disableThirdPartyCookieHeuristics;
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
