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


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		return $data;
	}
}
