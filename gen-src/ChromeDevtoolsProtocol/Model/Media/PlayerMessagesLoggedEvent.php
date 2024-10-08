<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * Send a list of any messages that need to be delivered.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlayerMessagesLoggedEvent implements \JsonSerializable
{
	/** @var string */
	public $playerId;

	/** @var PlayerMessage[] */
	public $messages;


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
		if (isset($data->messages)) {
			$instance->messages = [];
			foreach ($data->messages as $item) {
				$instance->messages[] = PlayerMessage::fromJson($item);
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
		if ($this->messages !== null) {
			$data->messages = [];
			foreach ($this->messages as $item) {
				$data->messages[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
