<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.FederatedAuthUserInfoRequestIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FederatedAuthUserInfoRequestIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $federatedAuthUserInfoRequestIssueReason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->federatedAuthUserInfoRequestIssueReason)) {
			$instance->federatedAuthUserInfoRequestIssueReason = (string)$data->federatedAuthUserInfoRequestIssueReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->federatedAuthUserInfoRequestIssueReason !== null) {
			$data->federatedAuthUserInfoRequestIssueReason = $this->federatedAuthUserInfoRequestIssueReason;
		}
		return $data;
	}
}
