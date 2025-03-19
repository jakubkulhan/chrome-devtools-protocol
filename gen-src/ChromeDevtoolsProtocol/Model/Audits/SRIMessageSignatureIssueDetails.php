<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.SRIMessageSignatureIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SRIMessageSignatureIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $error;

	/** @var string */
	public $signatureBase;

	/** @var AffectedRequest */
	public $request;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->error)) {
			$instance->error = (string)$data->error;
		}
		if (isset($data->signatureBase)) {
			$instance->signatureBase = (string)$data->signatureBase;
		}
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->error !== null) {
			$data->error = $this->error;
		}
		if ($this->signatureBase !== null) {
			$data->signatureBase = $this->signatureBase;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		return $data;
	}
}
