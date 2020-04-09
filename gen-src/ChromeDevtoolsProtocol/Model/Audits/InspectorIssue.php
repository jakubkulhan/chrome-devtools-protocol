<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * An inspector issue reported from the back-end.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectorIssue implements \JsonSerializable
{
	/** @var string */
	public $code;

	/** @var InspectorIssueDetails */
	public $details;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->code)) {
			$instance->code = (string)$data->code;
		}
		if (isset($data->details)) {
			$instance->details = InspectorIssueDetails::fromJson($data->details);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->code !== null) {
			$data->code = $this->code;
		}
		if ($this->details !== null) {
			$data->details = $this->details->jsonSerialize();
		}
		return $data;
	}
}
