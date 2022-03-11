<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue tracks information needed to print a deprecation message. The formatting is inherited from the old console.log version, see more at: https://source.chromium.org/chromium/chromium/src/+/main:third_party/blink/renderer/core/frame/deprecation.cc TODO(crbug.com/1264960): Re-work format to add i18n support per: https://source.chromium.org/chromium/chromium/src/+/main:third_party/blink/public/devtools_protocol/README.md
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
	 * The content of an untranslated deprecation issue, e.g. "window.inefficientLegacyStorageMethod will be removed in M97, around January 2022. Please use Web Storage or Indexed Database instead. This standard was abandoned in January, 1970. See https://www.chromestatus.com/feature/5684870116278272 for more details."
	 *
	 * @var string|null
	 */
	public $message;

	/**
	 * The id of an untranslated deprecation issue e.g. PrefixedStorageInfo.
	 *
	 * @var string
	 */
	public $deprecationType;


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
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		if (isset($data->deprecationType)) {
			$instance->deprecationType = (string)$data->deprecationType;
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
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		if ($this->deprecationType !== null) {
			$data->deprecationType = $this->deprecationType;
		}
		return $data;
	}
}
