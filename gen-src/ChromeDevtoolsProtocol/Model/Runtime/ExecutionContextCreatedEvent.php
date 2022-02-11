<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Issued when new execution context is created.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecutionContextCreatedEvent implements \JsonSerializable
{
	/**
	 * A newly created execution context.
	 *
	 * @var ExecutionContextDescription
	 */
	public $context;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->context)) {
			$instance->context = ExecutionContextDescription::fromJson($data->context);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->context !== null) {
			$data->context = $this->context->jsonSerialize();
		}
		return $data;
	}
}
