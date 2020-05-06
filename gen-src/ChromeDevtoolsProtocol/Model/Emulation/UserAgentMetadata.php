<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Used to specify User Agent Cient Hints to emulate. See https://wicg.github.io/ua-client-hints
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UserAgentMetadata implements \JsonSerializable
{
	/** @var UserAgentBrandVersion[] */
	public $brands;

	/** @var string */
	public $fullVersion;

	/** @var string */
	public $platform;

	/** @var string */
	public $platformVersion;

	/** @var string */
	public $architecture;

	/** @var string */
	public $model;

	/** @var bool */
	public $mobile;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->brands)) {
			$instance->brands = [];
			foreach ($data->brands as $item) {
				$instance->brands[] = UserAgentBrandVersion::fromJson($item);
			}
		}
		if (isset($data->fullVersion)) {
			$instance->fullVersion = (string)$data->fullVersion;
		}
		if (isset($data->platform)) {
			$instance->platform = (string)$data->platform;
		}
		if (isset($data->platformVersion)) {
			$instance->platformVersion = (string)$data->platformVersion;
		}
		if (isset($data->architecture)) {
			$instance->architecture = (string)$data->architecture;
		}
		if (isset($data->model)) {
			$instance->model = (string)$data->model;
		}
		if (isset($data->mobile)) {
			$instance->mobile = (bool)$data->mobile;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->brands !== null) {
			$data->brands = [];
			foreach ($this->brands as $item) {
				$data->brands[] = $item->jsonSerialize();
			}
		}
		if ($this->fullVersion !== null) {
			$data->fullVersion = $this->fullVersion;
		}
		if ($this->platform !== null) {
			$data->platform = $this->platform;
		}
		if ($this->platformVersion !== null) {
			$data->platformVersion = $this->platformVersion;
		}
		if ($this->architecture !== null) {
			$data->architecture = $this->architecture;
		}
		if ($this->model !== null) {
			$data->model = $this->model;
		}
		if ($this->mobile !== null) {
			$data->mobile = $this->mobile;
		}
		return $data;
	}
}
