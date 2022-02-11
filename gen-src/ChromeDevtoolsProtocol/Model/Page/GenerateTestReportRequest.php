<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.generateTestReport command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GenerateTestReportRequest implements \JsonSerializable
{
	/**
	 * Message to be displayed in the report.
	 *
	 * @var string
	 */
	public $message;

	/**
	 * Specifies the endpoint group to deliver the report to.
	 *
	 * @var string|null
	 */
	public $group;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		if (isset($data->group)) {
			$instance->group = (string)$data->group;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		if ($this->group !== null) {
			$data->group = $this->group;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GenerateTestReportRequestBuilder
	 */
	public static function builder(): GenerateTestReportRequestBuilder
	{
		return new GenerateTestReportRequestBuilder();
	}
}
