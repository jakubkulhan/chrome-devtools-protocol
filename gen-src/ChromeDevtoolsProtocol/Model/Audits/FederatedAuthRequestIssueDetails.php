<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.FederatedAuthRequestIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FederatedAuthRequestIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $federatedAuthRequestIssueReason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->federatedAuthRequestIssueReason)) {
			$instance->federatedAuthRequestIssueReason = (string)$data->federatedAuthRequestIssueReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->federatedAuthRequestIssueReason !== null) {
			$data->federatedAuthRequestIssueReason = $this->federatedAuthRequestIssueReason;
		}
		return $data;
	}
}
