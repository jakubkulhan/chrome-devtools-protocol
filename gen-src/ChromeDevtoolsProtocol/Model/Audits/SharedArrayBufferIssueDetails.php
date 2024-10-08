<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Details for a issue arising from an SAB being instantiated in, or transferred to a context that is not cross-origin isolated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedArrayBufferIssueDetails implements \JsonSerializable
{
	/** @var SourceCodeLocation */
	public $sourceCodeLocation;

	/** @var bool */
	public $isWarning;

	/** @var string */
	public $type;


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
		if (isset($data->isWarning)) {
			$instance->isWarning = (bool)$data->isWarning;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
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
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
