<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * A device bound session's inclusion URL rule.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSessionUrlRule implements \JsonSerializable
{
	/**
	 * See comments on `net::device_bound_sessions::SessionInclusionRules::UrlRule::rule_type`.
	 *
	 * @var string
	 */
	public $ruleType;

	/**
	 * See comments on `net::device_bound_sessions::SessionInclusionRules::UrlRule::host_pattern`.
	 *
	 * @var string
	 */
	public $hostPattern;

	/**
	 * See comments on `net::device_bound_sessions::SessionInclusionRules::UrlRule::path_prefix`.
	 *
	 * @var string
	 */
	public $pathPrefix;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ruleType)) {
			$instance->ruleType = (string)$data->ruleType;
		}
		if (isset($data->hostPattern)) {
			$instance->hostPattern = (string)$data->hostPattern;
		}
		if (isset($data->pathPrefix)) {
			$instance->pathPrefix = (string)$data->pathPrefix;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ruleType !== null) {
			$data->ruleType = $this->ruleType;
		}
		if ($this->hostPattern !== null) {
			$data->hostPattern = $this->hostPattern;
		}
		if ($this->pathPrefix !== null) {
			$data->pathPrefix = $this->pathPrefix;
		}
		return $data;
	}
}
