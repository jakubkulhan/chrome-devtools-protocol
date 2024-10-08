<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.FileHandler.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FileHandler implements \JsonSerializable
{
	/** @var string */
	public $action;

	/** @var string */
	public $name;

	/** @var ImageResource[]|null */
	public $icons;

	/**
	 * Mimic a map, name is the key, accepts is the value.
	 *
	 * @var FileFilter[]|null
	 */
	public $accepts;

	/**
	 * Won't repeat the enums, using string for easy comparison. Same as the other enums below.
	 *
	 * @var string
	 */
	public $launchType;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->action)) {
			$instance->action = (string)$data->action;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->icons)) {
			$instance->icons = [];
			foreach ($data->icons as $item) {
				$instance->icons[] = ImageResource::fromJson($item);
			}
		}
		if (isset($data->accepts)) {
			$instance->accepts = [];
			foreach ($data->accepts as $item) {
				$instance->accepts[] = FileFilter::fromJson($item);
			}
		}
		if (isset($data->launchType)) {
			$instance->launchType = (string)$data->launchType;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->action !== null) {
			$data->action = $this->action;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->icons !== null) {
			$data->icons = [];
			foreach ($this->icons as $item) {
				$data->icons[] = $item->jsonSerialize();
			}
		}
		if ($this->accepts !== null) {
			$data->accepts = [];
			foreach ($this->accepts as $item) {
				$data->accepts[] = $item->jsonSerialize();
			}
		}
		if ($this->launchType !== null) {
			$data->launchType = $this->launchType;
		}
		return $data;
	}
}
