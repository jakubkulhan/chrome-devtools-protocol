<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Response to SystemInfo.getInfo command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetInfoResponse implements \JsonSerializable
{
	/**
	 * Information about the GPUs on the system.
	 *
	 * @var GPUInfo
	 */
	public $gpu;

	/**
	 * A platform-dependent description of the model of the machine. On Mac OS, this is, for example, 'MacBookPro'. Will be the empty string if not supported.
	 *
	 * @var string
	 */
	public $modelName;

	/**
	 * A platform-dependent description of the version of the machine. On Mac OS, this is, for example, '10.1'. Will be the empty string if not supported.
	 *
	 * @var string
	 */
	public $modelVersion;

	/**
	 * The command line string used to launch the browser. Will be the empty string if not supported.
	 *
	 * @var string
	 */
	public $commandLine;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->gpu)) {
			$instance->gpu = GPUInfo::fromJson($data->gpu);
		}
		if (isset($data->modelName)) {
			$instance->modelName = (string)$data->modelName;
		}
		if (isset($data->modelVersion)) {
			$instance->modelVersion = (string)$data->modelVersion;
		}
		if (isset($data->commandLine)) {
			$instance->commandLine = (string)$data->commandLine;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->gpu !== null) {
			$data->gpu = $this->gpu->jsonSerialize();
		}
		if ($this->modelName !== null) {
			$data->modelName = $this->modelName;
		}
		if ($this->modelVersion !== null) {
			$data->modelVersion = $this->modelVersion;
		}
		if ($this->commandLine !== null) {
			$data->commandLine = $this->commandLine;
		}
		return $data;
	}
}
