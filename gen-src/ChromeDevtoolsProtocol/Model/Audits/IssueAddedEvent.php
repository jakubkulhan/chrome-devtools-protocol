<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.IssueAddedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class IssueAddedEvent implements \JsonSerializable
{
	/** @var InspectorIssue */
	public $issue;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->issue)) {
			$instance->issue = InspectorIssue::fromJson($data->issue);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->issue !== null) {
			$data->issue = $this->issue->jsonSerialize();
		}
		return $data;
	}
}
