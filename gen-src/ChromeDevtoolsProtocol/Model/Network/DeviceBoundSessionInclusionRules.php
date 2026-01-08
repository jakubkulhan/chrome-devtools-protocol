<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * A device bound session's inclusion rules.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSessionInclusionRules implements \JsonSerializable
{
	/**
	 * See comments on `net::device_bound_sessions::SessionInclusionRules::origin_`.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * Whether the whole site is included. See comments on `net::device_bound_sessions::SessionInclusionRules::include_site_` for more details; this boolean is true if that value is populated.
	 *
	 * @var bool
	 */
	public $includeSite;

	/**
	 * See comments on `net::device_bound_sessions::SessionInclusionRules::url_rules_`.
	 *
	 * @var DeviceBoundSessionUrlRule[]
	 */
	public $urlRules;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->includeSite)) {
			$instance->includeSite = (bool)$data->includeSite;
		}
		if (isset($data->urlRules)) {
			$instance->urlRules = [];
			foreach ($data->urlRules as $item) {
				$instance->urlRules[] = DeviceBoundSessionUrlRule::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->includeSite !== null) {
			$data->includeSite = $this->includeSite;
		}
		if ($this->urlRules !== null) {
			$data->urlRules = [];
			foreach ($this->urlRules as $item) {
				$data->urlRules[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
