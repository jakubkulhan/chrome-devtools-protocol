<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.CorsErrorStatus.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CorsErrorStatus implements \JsonSerializable
{
	/** @var string */
	public $corsError;

	/** @var string */
	public $failedParameter;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->corsError)) {
			$instance->corsError = (string)$data->corsError;
		}
		if (isset($data->failedParameter)) {
			$instance->failedParameter = (string)$data->failedParameter;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->corsError !== null) {
			$data->corsError = $this->corsError;
		}
		if ($this->failedParameter !== null) {
			$data->failedParameter = $this->failedParameter;
		}
		return $data;
	}
}
