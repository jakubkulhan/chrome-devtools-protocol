<?php

namespace ChromeDevtoolsProtocol\Model\Log;

/**
 * Request for Log.startViolationsReport command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartViolationsReportRequest implements \JsonSerializable
{
	/**
	 * Configuration for violations.
	 *
	 * @var ViolationSetting[]
	 */
	public $config;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->config)) {
			$instance->config = [];
			foreach ($data->config as $item) {
				$instance->config[] = ViolationSetting::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->config !== null) {
			$data->config = [];
			foreach ($this->config as $item) {
				$data->config[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StartViolationsReportRequestBuilder
	 */
	public static function builder(): StartViolationsReportRequestBuilder
	{
		return new StartViolationsReportRequestBuilder();
	}
}
