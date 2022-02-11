<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * This can be called multiple times, and can be used to set / override / remove player properties. A null propValue indicates removal.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlayerPropertiesChangedEvent implements \JsonSerializable
{
	/** @var string */
	public $playerId;

	/** @var PlayerProperty[] */
	public $properties;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->playerId)) {
			$instance->playerId = (string)$data->playerId;
		}
		if (isset($data->properties)) {
			$instance->properties = [];
			foreach ($data->properties as $item) {
				$instance->properties[] = PlayerProperty::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->playerId !== null) {
			$data->playerId = $this->playerId;
		}
		if ($this->properties !== null) {
			$data->properties = [];
			foreach ($this->properties as $item) {
				$data->properties[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
