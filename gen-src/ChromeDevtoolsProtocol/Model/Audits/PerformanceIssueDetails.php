<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Details for a performance issue.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PerformanceIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $performanceIssueType;

	/** @var SourceCodeLocation|null */
	public $sourceCodeLocation;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->performanceIssueType)) {
			$instance->performanceIssueType = (string)$data->performanceIssueType;
		}
		if (isset($data->sourceCodeLocation)) {
			$instance->sourceCodeLocation = SourceCodeLocation::fromJson($data->sourceCodeLocation);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->performanceIssueType !== null) {
			$data->performanceIssueType = $this->performanceIssueType;
		}
		if ($this->sourceCodeLocation !== null) {
			$data->sourceCodeLocation = $this->sourceCodeLocation->jsonSerialize();
		}
		return $data;
	}
}
