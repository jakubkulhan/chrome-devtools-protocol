<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue tracks client hints related issues. It's used to deprecate old features, encourage the use of new ones, and provide general guidance.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClientHintIssueDetails implements \JsonSerializable
{
	/** @var SourceCodeLocation */
	public $sourceCodeLocation;

	/** @var string */
	public $clientHintIssueReason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sourceCodeLocation)) {
			$instance->sourceCodeLocation = SourceCodeLocation::fromJson($data->sourceCodeLocation);
		}
		if (isset($data->clientHintIssueReason)) {
			$instance->clientHintIssueReason = (string)$data->clientHintIssueReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sourceCodeLocation !== null) {
			$data->sourceCodeLocation = $this->sourceCodeLocation->jsonSerialize();
		}
		if ($this->clientHintIssueReason !== null) {
			$data->clientHintIssueReason = $this->clientHintIssueReason;
		}
		return $data;
	}
}
