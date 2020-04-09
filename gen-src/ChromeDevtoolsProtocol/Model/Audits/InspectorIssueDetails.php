<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This struct holds a list of optional fields with additional information specific to the kind of issue. When adding a new issue code, please also add a new optional field to this type.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectorIssueDetails implements \JsonSerializable
{
	/** @var SameSiteCookieIssueDetails|null */
	public $sameSiteCookieIssueDetails;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sameSiteCookieIssueDetails)) {
			$instance->sameSiteCookieIssueDetails = SameSiteCookieIssueDetails::fromJson($data->sameSiteCookieIssueDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sameSiteCookieIssueDetails !== null) {
			$data->sameSiteCookieIssueDetails = $this->sameSiteCookieIssueDetails->jsonSerialize();
		}
		return $data;
	}
}
