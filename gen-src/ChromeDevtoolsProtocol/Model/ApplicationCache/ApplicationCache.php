<?php
namespace ChromeDevtoolsProtocol\Model\ApplicationCache;

/**
 * Detailed application cache information.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ApplicationCache implements \JsonSerializable
{
	/**
	 * Manifest URL.
	 *
	 * @var string
	 */
	public $manifestURL;

	/**
	 * Application cache size.
	 *
	 * @var int|float
	 */
	public $size;

	/**
	 * Application cache creation time.
	 *
	 * @var int|float
	 */
	public $creationTime;

	/**
	 * Application cache update time.
	 *
	 * @var int|float
	 */
	public $updateTime;

	/**
	 * Application cache resources.
	 *
	 * @var ApplicationCacheResource[]
	 */
	public $resources;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->manifestURL)) {
			$instance->manifestURL = (string)$data->manifestURL;
		}
		if (isset($data->size)) {
			$instance->size = $data->size;
		}
		if (isset($data->creationTime)) {
			$instance->creationTime = $data->creationTime;
		}
		if (isset($data->updateTime)) {
			$instance->updateTime = $data->updateTime;
		}
		if (isset($data->resources)) {
			$instance->resources = [];
			foreach ($data->resources as $item) {
				$instance->resources[] = ApplicationCacheResource::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->manifestURL !== null) {
			$data->manifestURL = $this->manifestURL;
		}
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		if ($this->creationTime !== null) {
			$data->creationTime = $this->creationTime;
		}
		if ($this->updateTime !== null) {
			$data->updateTime = $this->updateTime;
		}
		if ($this->resources !== null) {
			$data->resources = [];
			foreach ($this->resources as $item) {
				$data->resources[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
