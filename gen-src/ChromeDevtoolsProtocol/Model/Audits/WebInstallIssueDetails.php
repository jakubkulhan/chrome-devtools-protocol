<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This issue reports a failure involving a web app manifest used by a Web Install operation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebInstallIssueDetails implements \JsonSerializable
{
	/** @var string|null */
	public $manifestUrl;

	/** @var string */
	public $reason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->manifestUrl)) {
			$instance->manifestUrl = (string)$data->manifestUrl;
		}
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->manifestUrl !== null) {
			$data->manifestUrl = $this->manifestUrl;
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		return $data;
	}
}
