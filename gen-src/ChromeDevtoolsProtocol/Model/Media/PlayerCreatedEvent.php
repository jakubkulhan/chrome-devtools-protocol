<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * Called whenever a player is created, or when a new agent joins and receives a list of active players. If an agent is restored, it will receive one event for each active player.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlayerCreatedEvent implements \JsonSerializable
{
	/** @var Player */
	public $player;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->player)) {
			$instance->player = Player::fromJson($data->player);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->player !== null) {
			$data->player = $this->player->jsonSerialize();
		}
		return $data;
	}
}
