<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.setRemoteLocations command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRemoteLocationsRequest implements \JsonSerializable
{
	/**
	 * List of remote locations.
	 *
	 * @var RemoteLocation[]
	 */
	public $locations;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->locations)) {
			$instance->locations = [];
			foreach ($data->locations as $item) {
				$instance->locations[] = RemoteLocation::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->locations !== null) {
			$data->locations = [];
			foreach ($this->locations as $item) {
				$data->locations[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetRemoteLocationsRequestBuilder
	 */
	public static function builder(): SetRemoteLocationsRequestBuilder
	{
		return new SetRemoteLocationsRequestBuilder();
	}
}
