<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Details for a request that has been blocked with the BLOCKED_BY_RESPONSE code. Currently only used for COEP/COOP, but may be extended to include some CSP errors in the future.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedArrayBufferTransferIssueDetails implements \JsonSerializable
{
	/** @var SourceCodeLocation */
	public $sourceCodeLocation;

	/** @var bool */
	public $isWarning;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sourceCodeLocation)) {
			$instance->sourceCodeLocation = SourceCodeLocation::fromJson($data->sourceCodeLocation);
		}
		if (isset($data->isWarning)) {
			$instance->isWarning = (bool)$data->isWarning;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sourceCodeLocation !== null) {
			$data->sourceCodeLocation = $this->sourceCodeLocation->jsonSerialize();
		}
		if ($this->isWarning !== null) {
			$data->isWarning = $this->isWarning;
		}
		return $data;
	}
}
