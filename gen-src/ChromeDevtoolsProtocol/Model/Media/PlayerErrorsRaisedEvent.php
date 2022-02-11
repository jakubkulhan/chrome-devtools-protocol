<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * Send a list of any errors that need to be delivered.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlayerErrorsRaisedEvent implements \JsonSerializable
{
	/** @var string */
	public $playerId;

	/** @var PlayerError[] */
	public $errors;


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
		if (isset($data->errors)) {
			$instance->errors = [];
			foreach ($data->errors as $item) {
				$instance->errors[] = PlayerError::fromJson($item);
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
		if ($this->errors !== null) {
			$data->errors = [];
			foreach ($this->errors as $item) {
				$data->errors[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
