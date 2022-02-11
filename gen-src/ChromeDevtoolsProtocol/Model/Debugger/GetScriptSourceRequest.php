<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.getScriptSource command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetScriptSourceRequest implements \JsonSerializable
{
	/**
	 * Id of the script to get source for.
	 *
	 * @var string
	 */
	public $scriptId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetScriptSourceRequestBuilder
	 */
	public static function builder(): GetScriptSourceRequestBuilder
	{
		return new GetScriptSourceRequestBuilder();
	}
}
