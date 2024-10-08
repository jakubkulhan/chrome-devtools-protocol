<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * Security state information about the page.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class VisibleSecurityState implements \JsonSerializable
{
	/**
	 * The security level of the page.
	 *
	 * @var string
	 */
	public $securityState;

	/**
	 * Security state details about the page certificate.
	 *
	 * @var CertificateSecurityState|null
	 */
	public $certificateSecurityState;

	/**
	 * The type of Safety Tip triggered on the page. Note that this field will be set even if the Safety Tip UI was not actually shown.
	 *
	 * @var SafetyTipInfo|null
	 */
	public $safetyTipInfo;

	/**
	 * Array of security state issues ids.
	 *
	 * @var string[]
	 */
	public $securityStateIssueIds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->securityState)) {
			$instance->securityState = (string)$data->securityState;
		}
		if (isset($data->certificateSecurityState)) {
			$instance->certificateSecurityState = CertificateSecurityState::fromJson($data->certificateSecurityState);
		}
		if (isset($data->safetyTipInfo)) {
			$instance->safetyTipInfo = SafetyTipInfo::fromJson($data->safetyTipInfo);
		}
		if (isset($data->securityStateIssueIds)) {
			$instance->securityStateIssueIds = [];
			foreach ($data->securityStateIssueIds as $item) {
				$instance->securityStateIssueIds[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->securityState !== null) {
			$data->securityState = $this->securityState;
		}
		if ($this->certificateSecurityState !== null) {
			$data->certificateSecurityState = $this->certificateSecurityState->jsonSerialize();
		}
		if ($this->safetyTipInfo !== null) {
			$data->safetyTipInfo = $this->safetyTipInfo->jsonSerialize();
		}
		if ($this->securityStateIssueIds !== null) {
			$data->securityStateIssueIds = [];
			foreach ($this->securityStateIssueIds as $item) {
				$data->securityStateIssueIds[] = $item;
			}
		}
		return $data;
	}
}
