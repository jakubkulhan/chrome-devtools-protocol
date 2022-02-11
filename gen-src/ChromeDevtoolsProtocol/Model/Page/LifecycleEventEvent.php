<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired for top level page lifecycle events such as navigation, load, paint, etc.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LifecycleEventEvent implements \JsonSerializable
{
	/**
	 * Id of the frame.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Loader identifier. Empty string if the request is fetched from worker.
	 *
	 * @var string
	 */
	public $loaderId;

	/** @var string */
	public $name;

	/** @var int|float */
	public $timestamp;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}
}
