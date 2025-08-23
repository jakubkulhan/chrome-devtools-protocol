<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * Named type Media.Player.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Player implements \JsonSerializable
{
	/** @var string */
	public $playerId;

	/** @var int */
	public $domNodeId;


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
		if (isset($data->domNodeId)) {
			$instance->domNodeId = (int)$data->domNodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->playerId !== null) {
			$data->playerId = $this->playerId;
		}
		if ($this->domNodeId !== null) {
			$data->domNodeId = $this->domNodeId;
		}
		return $data;
	}
}
