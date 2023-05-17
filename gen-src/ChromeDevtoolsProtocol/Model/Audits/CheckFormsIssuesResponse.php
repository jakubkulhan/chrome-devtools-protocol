<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Response to Audits.checkFormsIssues command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CheckFormsIssuesResponse implements \JsonSerializable
{
	/** @var GenericIssueDetails[] */
	public $formIssues;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->formIssues)) {
			$instance->formIssues = [];
			foreach ($data->formIssues as $item) {
				$instance->formIssues[] = GenericIssueDetails::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->formIssues !== null) {
			$data->formIssues = [];
			foreach ($this->formIssues as $item) {
				$data->formIssues[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
