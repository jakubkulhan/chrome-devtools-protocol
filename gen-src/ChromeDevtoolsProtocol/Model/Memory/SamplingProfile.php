<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * Array of heap profile samples.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SamplingProfile implements \JsonSerializable
{
	/** @var SamplingProfileNode[] */
	public $samples;

	/** @var Module[] */
	public $modules;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->samples)) {
			$instance->samples = [];
			foreach ($data->samples as $item) {
				$instance->samples[] = SamplingProfileNode::fromJson($item);
			}
		}
		if (isset($data->modules)) {
			$instance->modules = [];
			foreach ($data->modules as $item) {
				$instance->modules[] = Module::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->samples !== null) {
			$data->samples = [];
			foreach ($this->samples as $item) {
				$data->samples[] = $item->jsonSerialize();
			}
		}
		if ($this->modules !== null) {
			$data->modules = [];
			foreach ($this->modules as $item) {
				$data->modules[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
