<?php

namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;

/**
 * Object event listener.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EventListener implements \JsonSerializable
{
	/**
	 * `EventListener`'s type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * `EventListener`'s useCapture.
	 *
	 * @var bool
	 */
	public $useCapture;

	/**
	 * `EventListener`'s passive flag.
	 *
	 * @var bool
	 */
	public $passive;

	/**
	 * `EventListener`'s once flag.
	 *
	 * @var bool
	 */
	public $once;

	/**
	 * Script id of the handler code.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * Line number in the script (0-based).
	 *
	 * @var int
	 */
	public $lineNumber;

	/**
	 * Column number in the script (0-based).
	 *
	 * @var int
	 */
	public $columnNumber;

	/**
	 * Event handler function value.
	 *
	 * @var RemoteObject|null
	 */
	public $handler;

	/**
	 * Event original handler function value.
	 *
	 * @var RemoteObject|null
	 */
	public $originalHandler;

	/**
	 * Node the listener is added to (if any).
	 *
	 * @var int
	 */
	public $backendNodeId;


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
		if (isset($data->useCapture)) {
			$instance->useCapture = (bool)$data->useCapture;
		}
		if (isset($data->passive)) {
			$instance->passive = (bool)$data->passive;
		}
		if (isset($data->once)) {
			$instance->once = (bool)$data->once;
		}
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->lineNumber)) {
			$instance->lineNumber = (int)$data->lineNumber;
		}
		if (isset($data->columnNumber)) {
			$instance->columnNumber = (int)$data->columnNumber;
		}
		if (isset($data->handler)) {
			$instance->handler = RemoteObject::fromJson($data->handler);
		}
		if (isset($data->originalHandler)) {
			$instance->originalHandler = RemoteObject::fromJson($data->originalHandler);
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->useCapture !== null) {
			$data->useCapture = $this->useCapture;
		}
		if ($this->passive !== null) {
			$data->passive = $this->passive;
		}
		if ($this->once !== null) {
			$data->once = $this->once;
		}
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->lineNumber !== null) {
			$data->lineNumber = $this->lineNumber;
		}
		if ($this->columnNumber !== null) {
			$data->columnNumber = $this->columnNumber;
		}
		if ($this->handler !== null) {
			$data->handler = $this->handler->jsonSerialize();
		}
		if ($this->originalHandler !== null) {
			$data->originalHandler = $this->originalHandler->jsonSerialize();
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		return $data;
	}
}
