<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.setAttributionReportingLocalTestingMode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttributionReportingLocalTestingModeRequest implements \JsonSerializable
{
	/**
	 * If enabled, noise is suppressed and reports are sent immediately.
	 *
	 * @var bool
	 */
	public $enabled;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAttributionReportingLocalTestingModeRequestBuilder
	 */
	public static function builder(): SetAttributionReportingLocalTestingModeRequestBuilder
	{
		return new SetAttributionReportingLocalTestingModeRequestBuilder();
	}
}
