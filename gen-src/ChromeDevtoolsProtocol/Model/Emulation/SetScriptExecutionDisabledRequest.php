<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setScriptExecutionDisabled command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetScriptExecutionDisabledRequest implements \JsonSerializable
{
	/**
	 * Whether script execution should be disabled in the page.
	 *
	 * @var bool
	 */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->value)) {
			$instance->value = (bool)$data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetScriptExecutionDisabledRequestBuilder
	 */
	public static function builder(): SetScriptExecutionDisabledRequestBuilder
	{
		return new SetScriptExecutionDisabledRequestBuilder();
	}
}
