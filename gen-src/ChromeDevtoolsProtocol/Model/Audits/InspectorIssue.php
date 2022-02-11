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

	/**
	 * A unique id for this issue. May be omitted if no other entity (e.g. exception, CDP message, etc.) is referencing this issue.
	 *
	 * @var string
	 */
	public $issueId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->code)) {
			$instance->code = (string)$data->code;
		}
		if (isset($data->details)) {
			$instance->details = InspectorIssueDetails::fromJson($data->details);
		}
		if (isset($data->issueId)) {
			$instance->issueId = (string)$data->issueId;
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
		if ($this->issueId !== null) {
			$data->issueId = $this->issueId;
		}
		return $data;
	}
}
