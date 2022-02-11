<?php

namespace ChromeDevtoolsProtocol\Model\Cast;

/**
 * This is fired whenever the outstanding issue/error message changes. |issueMessage| is empty if there is no issue.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class IssueUpdatedEvent implements \JsonSerializable
{
	/** @var string */
	public $issueMessage;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->issueMessage)) {
			$instance->issueMessage = (string)$data->issueMessage;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->issueMessage !== null) {
			$data->issueMessage = $this->issueMessage;
		}
		return $data;
	}
}
