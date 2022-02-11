<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * The origin's IndexedDB database list has been modified.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class IndexedDBListUpdatedEvent implements \JsonSerializable
{
	/**
	 * Origin to update.
	 *
	 * @var string
	 */
	public $origin;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		return $data;
	}
}
