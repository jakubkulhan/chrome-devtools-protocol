<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.EmailVerificationRequestIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EmailVerificationRequestIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $emailVerificationRequestIssueReason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->emailVerificationRequestIssueReason)) {
			$instance->emailVerificationRequestIssueReason = (string)$data->emailVerificationRequestIssueReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->emailVerificationRequestIssueReason !== null) {
			$data->emailVerificationRequestIssueReason = $this->emailVerificationRequestIssueReason;
		}
		return $data;
	}
}
