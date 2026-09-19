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
	 * App id, either from manifest's id attribute or computed from start_url
	 *
	 * @var string|null
	 */
	public $appId;

	/**
	 * Recommendation for manifest's id attribute to match current id computed from start_url
	 *
	 * @var string|null
	 */
	public $recommendedId;

	/**
	 * The bundle ID for an Isolated Web App (IWA)
	 *
	 * @var string|null
	 */
	public $bundleId;

	/**
	 * The name of the parent app if this app is a Sub-App
	 *
	 * @var string|null
	 */
	public $parentAppName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->appId)) {
			$instance->appId = (string)$data->appId;
		}
		if (isset($data->recommendedId)) {
			$instance->recommendedId = (string)$data->recommendedId;
		}
		if (isset($data->bundleId)) {
			$instance->bundleId = (string)$data->bundleId;
		}
		if (isset($data->parentAppName)) {
			$instance->parentAppName = (string)$data->parentAppName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->appId !== null) {
			$data->appId = $this->appId;
		}
		if ($this->recommendedId !== null) {
			$data->recommendedId = $this->recommendedId;
		}
		if ($this->bundleId !== null) {
			$data->bundleId = $this->bundleId;
		}
		if ($this->parentAppName !== null) {
			$data->parentAppName = $this->parentAppName;
		}
		return $data;
	}
}
