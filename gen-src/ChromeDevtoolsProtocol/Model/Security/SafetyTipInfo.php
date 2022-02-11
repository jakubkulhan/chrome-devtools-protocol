<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * Named type Security.SafetyTipInfo.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SafetyTipInfo implements \JsonSerializable
{
	/**
	 * Describes whether the page triggers any safety tips or reputation warnings. Default is unknown.
	 *
	 * @var string
	 */
	public $safetyTipStatus;

	/**
	 * The URL the safety tip suggested ("Did you mean?"). Only filled in for lookalike matches.
	 *
	 * @var string|null
	 */
	public $safeUrl;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->safetyTipStatus)) {
			$instance->safetyTipStatus = (string)$data->safetyTipStatus;
		}
		if (isset($data->safeUrl)) {
			$instance->safeUrl = (string)$data->safeUrl;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->safetyTipStatus !== null) {
			$data->safetyTipStatus = $this->safetyTipStatus;
		}
		if ($this->safeUrl !== null) {
			$data->safeUrl = $this->safeUrl;
		}
		return $data;
	}
}
