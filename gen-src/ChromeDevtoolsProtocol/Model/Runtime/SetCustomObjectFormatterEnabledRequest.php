<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.setCustomObjectFormatterEnabled command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCustomObjectFormatterEnabledRequest implements \JsonSerializable
{
	/** @var bool */
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
	 * @return SetCustomObjectFormatterEnabledRequestBuilder
	 */
	public static function builder(): SetCustomObjectFormatterEnabledRequestBuilder
	{
		return new SetCustomObjectFormatterEnabledRequestBuilder();
	}
}
