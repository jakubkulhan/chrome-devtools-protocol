<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * A cache has been added/deleted.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CacheStorageListUpdatedEvent implements \JsonSerializable
{
	/**
	 * Origin to update.
	 *
	 * @var string
	 */
	public $origin;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		return $data;
	}
}
