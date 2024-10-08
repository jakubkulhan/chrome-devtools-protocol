<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.FailedRequestInfo.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FailedRequestInfo implements \JsonSerializable
{
	/**
	 * The URL that failed to load.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * The failure message for the failed request.
	 *
	 * @var string
	 */
	public $failureMessage;

	/** @var string */
	public $requestId;


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
		if (isset($data->failureMessage)) {
			$instance->failureMessage = (string)$data->failureMessage;
		}
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->failureMessage !== null) {
			$data->failureMessage = $this->failureMessage;
		}
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		return $data;
	}
}
