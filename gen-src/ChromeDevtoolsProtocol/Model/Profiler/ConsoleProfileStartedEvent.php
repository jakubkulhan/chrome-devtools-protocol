<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

use ChromeDevtoolsProtocol\Model\Debugger\Location;

/**
 * Sent when new profile recording is started using console.profile() call.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ConsoleProfileStartedEvent implements \JsonSerializable
{
	/** @var string */
	public $id;

	/**
	 * Location of console.profile().
	 *
	 * @var Location
	 */
	public $location;

	/**
	 * Profile title passed as an argument to console.profile().
	 *
	 * @var string|null
	 */
	public $title;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->location)) {
			$instance->location = Location::fromJson($data->location);
		}
		if (isset($data->title)) {
			$instance->title = (string)$data->title;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->location !== null) {
			$data->location = $this->location->jsonSerialize();
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		return $data;
	}
}
