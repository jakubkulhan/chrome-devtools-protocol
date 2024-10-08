<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * Called whenever a player is created, or when a new agent joins and receives a list of active players. If an agent is restored, it will receive the full list of player ids and all events again.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlayersCreatedEvent implements \JsonSerializable
{
	/** @var string[] */
	public $players;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->players)) {
			$instance->players = [];
		if (isset($data->players)) {
			$instance->players = [];
			foreach ($data->players as $item) {
				$instance->players[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->players !== null) {
			$data->players = [];
		if ($this->players !== null) {
			$data->players = [];
			foreach ($this->players as $item) {
				$data->players[] = $item;
			}
		}
		}
		return $data;
	}
}
