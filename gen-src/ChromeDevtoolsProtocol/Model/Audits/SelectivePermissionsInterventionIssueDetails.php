<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;

/**
 * The issue warns about blocked calls to privacy sensitive APIs via the Selective Permissions Intervention.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SelectivePermissionsInterventionIssueDetails implements \JsonSerializable
{
	/**
	 * Which API was intervened on.
	 *
	 * @var string
	 */
	public $apiName;

	/**
	 * Why the ad script using the API is considered an ad.
	 *
	 * @var AdAncestry
	 */
	public $adAncestry;

	/**
	 * The stack trace at the time of the intervention.
	 *
	 * @var StackTrace|null
	 */
	public $stackTrace;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->apiName)) {
			$instance->apiName = (string)$data->apiName;
		}
		if (isset($data->adAncestry)) {
			$instance->adAncestry = AdAncestry::fromJson($data->adAncestry);
		}
		if (isset($data->stackTrace)) {
			$instance->stackTrace = StackTrace::fromJson($data->stackTrace);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->apiName !== null) {
			$data->apiName = $this->apiName;
		}
		if ($this->adAncestry !== null) {
			$data->adAncestry = $this->adAncestry->jsonSerialize();
		}
		if ($this->stackTrace !== null) {
			$data->stackTrace = $this->stackTrace->jsonSerialize();
		}
		return $data;
	}
}
