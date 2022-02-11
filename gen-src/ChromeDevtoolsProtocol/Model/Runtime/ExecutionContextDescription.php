<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Description of an isolated world.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecutionContextDescription implements \JsonSerializable
{
	/**
	 * Unique id of the execution context. It can be used to specify in which execution context script evaluation should be performed.
	 *
	 * @var int
	 */
	public $id;

	/**
	 * Execution context origin.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * Human readable name describing given context.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * A system-unique execution context identifier. Unlike the id, this is unique across multiple processes, so can be reliably used to identify specific context while backend performs a cross-process navigation.
	 *
	 * @var string
	 */
	public $uniqueId;

	/**
	 * Embedder-specific auxiliary data.
	 *
	 * @var object|null
	 */
	public $auxData;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (int)$data->id;
		}
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->uniqueId)) {
			$instance->uniqueId = (string)$data->uniqueId;
		}
		if (isset($data->auxData)) {
			$instance->auxData = $data->auxData;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->uniqueId !== null) {
			$data->uniqueId = $this->uniqueId;
		}
		if ($this->auxData !== null) {
			$data->auxData = $this->auxData;
		}
		return $data;
	}
}
