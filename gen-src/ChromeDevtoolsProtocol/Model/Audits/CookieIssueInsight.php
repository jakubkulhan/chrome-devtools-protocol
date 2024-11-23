<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Information about the suggested solution to a cookie issue.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieIssueInsight implements \JsonSerializable
{
	/** @var string */
	public $type;

	/**
	 * Link to table entry in third-party cookie migration readiness list.
	 *
	 * @var string|null
	 */
	public $tableEntryUrl;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->tableEntryUrl)) {
			$instance->tableEntryUrl = (string)$data->tableEntryUrl;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->tableEntryUrl !== null) {
			$data->tableEntryUrl = $this->tableEntryUrl;
		}
		return $data;
	}
}
