<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getEnvironmentVariables command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetEnvironmentVariablesResponse implements \JsonSerializable
{
	/** @var object */
	public $environmentVariables;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->environmentVariables)) {
			$instance->environmentVariables = $data->environmentVariables;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->environmentVariables !== null) {
			$data->environmentVariables = $this->environmentVariables;
		}
		return $data;
	}
}
