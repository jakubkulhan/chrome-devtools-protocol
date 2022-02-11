<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.TrustedWebActivityIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TrustedWebActivityIssueDetails implements \JsonSerializable
{
	/**
	 * The url that triggers the violation.
	 *
	 * @var string
	 */
	public $url;

	/** @var string */
	public $violationType;

	/** @var int|null */
	public $httpStatusCode;

	/**
	 * The package name of the Trusted Web Activity client app. This field is only used when violation type is kDigitalAssetLinks.
	 *
	 * @var string|null
	 */
	public $packageName;

	/**
	 * The signature of the Trusted Web Activity client app. This field is only used when violation type is kDigitalAssetLinks.
	 *
	 * @var string|null
	 */
	public $signature;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->violationType)) {
			$instance->violationType = (string)$data->violationType;
		}
		if (isset($data->httpStatusCode)) {
			$instance->httpStatusCode = (int)$data->httpStatusCode;
		}
		if (isset($data->packageName)) {
			$instance->packageName = (string)$data->packageName;
		}
		if (isset($data->signature)) {
			$instance->signature = (string)$data->signature;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->violationType !== null) {
			$data->violationType = $this->violationType;
		}
		if ($this->httpStatusCode !== null) {
			$data->httpStatusCode = $this->httpStatusCode;
		}
		if ($this->packageName !== null) {
			$data->packageName = $this->packageName;
		}
		if ($this->signature !== null) {
			$data->signature = $this->signature;
		}
		return $data;
	}
}
