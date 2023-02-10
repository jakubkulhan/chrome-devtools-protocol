<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue tracks information needed to print a deprecation message. https://source.chromium.org/chromium/chromium/src/+/main:third_party/blink/renderer/core/frame/third_party/blink/renderer/core/frame/deprecation/README.md
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeprecationIssueDetails implements \JsonSerializable
{
	/** @var AffectedFrame|null */
	public $affectedFrame;

	/** @var SourceCodeLocation */
	public $sourceCodeLocation;

	/**
	 * One of the deprecation names from third_party/blink/renderer/core/frame/deprecation/deprecation.json5
	 *
	 * @var string
	 */
	public $type;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->affectedFrame)) {
			$instance->affectedFrame = AffectedFrame::fromJson($data->affectedFrame);
		}
		if (isset($data->sourceCodeLocation)) {
			$instance->sourceCodeLocation = SourceCodeLocation::fromJson($data->sourceCodeLocation);
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->affectedFrame !== null) {
			$data->affectedFrame = $this->affectedFrame->jsonSerialize();
		}
		if ($this->sourceCodeLocation !== null) {
			$data->sourceCodeLocation = $this->sourceCodeLocation->jsonSerialize();
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
