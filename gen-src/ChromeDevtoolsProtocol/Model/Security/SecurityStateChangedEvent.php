<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * The security state of the page changed. No longer being sent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SecurityStateChangedEvent implements \JsonSerializable
{
	/**
	 * Security state.
	 *
	 * @var string
	 */
	public $securityState;

	/**
	 * True if the page was loaded over cryptographic transport such as HTTPS.
	 *
	 * @var bool
	 */
	public $schemeIsCryptographic;

	/**
	 * Previously a list of explanations for the security state. Now always empty.
	 *
	 * @var SecurityStateExplanation[]
	 */
	public $explanations;

	/**
	 * Information about insecure content on the page.
	 *
	 * @var InsecureContentStatus
	 */
	public $insecureContentStatus;

	/**
	 * Overrides user-visible description of the state. Always omitted.
	 *
	 * @var string|null
	 */
	public $summary;


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
		if (isset($data->schemeIsCryptographic)) {
			$instance->schemeIsCryptographic = (bool)$data->schemeIsCryptographic;
		}
		if (isset($data->explanations)) {
			$instance->explanations = [];
			foreach ($data->explanations as $item) {
				$instance->explanations[] = SecurityStateExplanation::fromJson($item);
			}
		}
		if (isset($data->insecureContentStatus)) {
			$instance->insecureContentStatus = InsecureContentStatus::fromJson($data->insecureContentStatus);
		}
		if (isset($data->summary)) {
			$instance->summary = (string)$data->summary;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->securityState !== null) {
			$data->securityState = $this->securityState;
		}
		if ($this->schemeIsCryptographic !== null) {
			$data->schemeIsCryptographic = $this->schemeIsCryptographic;
		}
		if ($this->explanations !== null) {
			$data->explanations = [];
			foreach ($this->explanations as $item) {
				$data->explanations[] = $item->jsonSerialize();
			}
		}
		if ($this->insecureContentStatus !== null) {
			$data->insecureContentStatus = $this->insecureContentStatus->jsonSerialize();
		}
		if ($this->summary !== null) {
			$data->summary = $this->summary;
		}
		return $data;
	}
}
