<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.OriginTrialToken.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OriginTrialToken implements \JsonSerializable
{
	/** @var string */
	public $origin;

	/** @var bool */
	public $matchSubDomains;

	/** @var string */
	public $trialName;

	/** @var int|float */
	public $expiryTime;

	/** @var bool */
	public $isThirdParty;

	/** @var string */
	public $usageRestriction;


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
		if (isset($data->matchSubDomains)) {
			$instance->matchSubDomains = (bool)$data->matchSubDomains;
		}
		if (isset($data->trialName)) {
			$instance->trialName = (string)$data->trialName;
		}
		if (isset($data->expiryTime)) {
			$instance->expiryTime = $data->expiryTime;
		}
		if (isset($data->isThirdParty)) {
			$instance->isThirdParty = (bool)$data->isThirdParty;
		}
		if (isset($data->usageRestriction)) {
			$instance->usageRestriction = (string)$data->usageRestriction;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->matchSubDomains !== null) {
			$data->matchSubDomains = $this->matchSubDomains;
		}
		if ($this->trialName !== null) {
			$data->trialName = $this->trialName;
		}
		if ($this->expiryTime !== null) {
			$data->expiryTime = $this->expiryTime;
		}
		if ($this->isThirdParty !== null) {
			$data->isThirdParty = $this->isThirdParty;
		}
		if ($this->usageRestriction !== null) {
			$data->usageRestriction = $this->usageRestriction;
		}
		return $data;
	}
}
