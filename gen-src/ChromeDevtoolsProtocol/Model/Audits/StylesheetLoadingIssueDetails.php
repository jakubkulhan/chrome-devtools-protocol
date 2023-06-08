<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue warns when a referenced stylesheet couldn't be loaded.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StylesheetLoadingIssueDetails implements \JsonSerializable
{
	/**
	 * Source code position that referenced the failing stylesheet.
	 *
	 * @var SourceCodeLocation
	 */
	public $sourceCodeLocation;

	/**
	 * Reason why the stylesheet couldn't be loaded.
	 *
	 * @var string
	 */
	public $styleSheetLoadingIssueReason;

	/**
	 * Contains additional info when the failure was due to a request.
	 *
	 * @var FailedRequestInfo|null
	 */
	public $failedRequestInfo;


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
		if (isset($data->styleSheetLoadingIssueReason)) {
			$instance->styleSheetLoadingIssueReason = (string)$data->styleSheetLoadingIssueReason;
		}
		if (isset($data->failedRequestInfo)) {
			$instance->failedRequestInfo = FailedRequestInfo::fromJson($data->failedRequestInfo);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sourceCodeLocation !== null) {
			$data->sourceCodeLocation = $this->sourceCodeLocation->jsonSerialize();
		}
		if ($this->styleSheetLoadingIssueReason !== null) {
			$data->styleSheetLoadingIssueReason = $this->styleSheetLoadingIssueReason;
		}
		if ($this->failedRequestInfo !== null) {
			$data->failedRequestInfo = $this->failedRequestInfo->jsonSerialize();
		}
		return $data;
	}
}
