<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Request for WebAuthn.setAutomaticPresenceSimulation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAutomaticPresenceSimulationRequest implements \JsonSerializable
{
	/** @var string */
	public $authenticatorId;

	/** @var bool */
	public $enabled;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->authenticatorId)) {
			$instance->authenticatorId = (string)$data->authenticatorId;
		}
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->authenticatorId !== null) {
			$data->authenticatorId = $this->authenticatorId;
		}
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAutomaticPresenceSimulationRequestBuilder
	 */
	public static function builder(): SetAutomaticPresenceSimulationRequestBuilder
	{
		return new SetAutomaticPresenceSimulationRequestBuilder();
	}
}
