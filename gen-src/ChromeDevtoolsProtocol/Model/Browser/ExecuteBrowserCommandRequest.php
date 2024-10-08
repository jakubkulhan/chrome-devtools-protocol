<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.executeBrowserCommand command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecuteBrowserCommandRequest implements \JsonSerializable
{
	/** @var string */
	public $commandId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->commandId)) {
			$instance->commandId = (string)$data->commandId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->commandId !== null) {
			$data->commandId = $this->commandId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ExecuteBrowserCommandRequestBuilder
	 */
	public static function builder(): ExecuteBrowserCommandRequestBuilder
	{
		return new ExecuteBrowserCommandRequestBuilder();
	}
}
