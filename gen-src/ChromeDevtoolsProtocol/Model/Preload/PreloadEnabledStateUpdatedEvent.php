<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Fired when a preload enabled state is updated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PreloadEnabledStateUpdatedEvent implements \JsonSerializable
{
	/** @var string */
	public $state;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->state)) {
			$instance->state = (string)$data->state;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->state !== null) {
			$data->state = $this->state;
		}
		return $data;
	}
}
