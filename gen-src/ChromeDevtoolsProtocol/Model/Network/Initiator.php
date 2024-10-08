<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;

/**
 * Information about the request initiator.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Initiator implements \JsonSerializable
{
	/**
	 * Type of this initiator.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Initiator JavaScript stack trace, set for Script only.
	 *
	 * @var StackTrace|null
	 */
	public $stack;

	/**
	 * Initiator URL, set for Parser type or for Script type (when script is importing module) or for SignedExchange type.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * Initiator line number, set for Parser type or for Script type (when script is importing module) (0-based).
	 *
	 * @var int|float|null
	 */
	public $lineNumber;

	/**
	 * Initiator column number, set for Parser type or for Script type (when script is importing module) (0-based).
	 *
	 * @var int|float|null
	 */
	public $columnNumber;

	/**
	 * Set if another request triggered this request (e.g. preflight).
	 *
	 * @var string
	 */
	public $requestId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->stack)) {
			$instance->stack = StackTrace::fromJson($data->stack);
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->lineNumber)) {
			$instance->lineNumber = $data->lineNumber;
		}
		if (isset($data->columnNumber)) {
			$instance->columnNumber = $data->columnNumber;
		}
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->stack !== null) {
			$data->stack = $this->stack->jsonSerialize();
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->lineNumber !== null) {
			$data->lineNumber = $this->lineNumber;
		}
		if ($this->columnNumber !== null) {
			$data->columnNumber = $this->columnNumber;
		}
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		return $data;
	}
}
