<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Issued when execution context is destroyed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecutionContextDestroyedEvent implements \JsonSerializable
{
	/**
	 * Id of the destroyed context
	 *
	 * @var int
	 */
	public $executionContextId;

	/**
	 * Unique Id of the destroyed context
	 *
	 * @var string
	 */
	public $executionContextUniqueId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		if (isset($data->executionContextUniqueId)) {
			$instance->executionContextUniqueId = (string)$data->executionContextUniqueId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		if ($this->executionContextUniqueId !== null) {
			$data->executionContextUniqueId = $this->executionContextUniqueId;
		}
		return $data;
	}
}
