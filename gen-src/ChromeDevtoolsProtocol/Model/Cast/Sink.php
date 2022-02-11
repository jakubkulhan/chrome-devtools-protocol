<?php

namespace ChromeDevtoolsProtocol\Model\Cast;

/**
 * Named type Cast.Sink.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Sink implements \JsonSerializable
{
	/** @var string */
	public $name;

	/** @var string */
	public $id;

	/**
	 * Text describing the current session. Present only if there is an active session on the sink.
	 *
	 * @var string|null
	 */
	public $session;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->session)) {
			$instance->session = (string)$data->session;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->session !== null) {
			$data->session = $this->session;
		}
		return $data;
	}
}
