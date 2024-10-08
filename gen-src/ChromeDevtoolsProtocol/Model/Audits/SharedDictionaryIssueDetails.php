<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.SharedDictionaryIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedDictionaryIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $sharedDictionaryError;

	/** @var AffectedRequest */
	public $request;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sharedDictionaryError)) {
			$instance->sharedDictionaryError = (string)$data->sharedDictionaryError;
		}
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sharedDictionaryError !== null) {
			$data->sharedDictionaryError = $this->sharedDictionaryError;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		return $data;
	}
}
