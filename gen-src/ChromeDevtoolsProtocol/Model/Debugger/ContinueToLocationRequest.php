<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.continueToLocation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueToLocationRequest implements \JsonSerializable
{
	/**
	 * Location to continue to.
	 *
	 * @var Location
	 */
	public $location;

	/** @var string|null */
	public $targetCallFrames;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->location)) {
			$instance->location = Location::fromJson($data->location);
		}
		if (isset($data->targetCallFrames)) {
			$instance->targetCallFrames = (string)$data->targetCallFrames;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->location !== null) {
			$data->location = $this->location->jsonSerialize();
		}
		if ($this->targetCallFrames !== null) {
			$data->targetCallFrames = $this->targetCallFrames;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ContinueToLocationRequestBuilder
	 */
	public static function builder(): ContinueToLocationRequestBuilder
	{
		return new ContinueToLocationRequestBuilder();
	}
}
