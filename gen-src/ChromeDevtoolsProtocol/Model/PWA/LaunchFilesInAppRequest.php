<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Request for PWA.launchFilesInApp command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LaunchFilesInAppRequest implements \JsonSerializable
{
	/** @var string */
	public $manifestId;

	/** @var string[] */
	public $files;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->manifestId)) {
			$instance->manifestId = (string)$data->manifestId;
		}
		if (isset($data->files)) {
			$instance->files = [];
			foreach ($data->files as $item) {
				$instance->files[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->manifestId !== null) {
			$data->manifestId = $this->manifestId;
		}
		if ($this->files !== null) {
			$data->files = [];
			foreach ($this->files as $item) {
				$data->files[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return LaunchFilesInAppRequestBuilder
	 */
	public static function builder(): LaunchFilesInAppRequestBuilder
	{
		return new LaunchFilesInAppRequestBuilder();
	}
}
