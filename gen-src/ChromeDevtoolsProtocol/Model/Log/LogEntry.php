<?php

namespace ChromeDevtoolsProtocol\Model\Log;

use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;
use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;

/**
 * Log entry.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LogEntry implements \JsonSerializable
{
	/**
	 * Log entry source.
	 *
	 * @var string
	 */
	public $source;

	/**
	 * Log entry severity.
	 *
	 * @var string
	 */
	public $level;

	/**
	 * Logged text.
	 *
	 * @var string
	 */
	public $text;

	/** @var string|null */
	public $category;

	/**
	 * Timestamp when this entry was added.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * URL of the resource if known.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * Line number in the resource.
	 *
	 * @var int|null
	 */
	public $lineNumber;

	/**
	 * JavaScript stack trace.
	 *
	 * @var StackTrace|null
	 */
	public $stackTrace;

	/**
	 * Identifier of the network request associated with this entry.
	 *
	 * @var string
	 */
	public $networkRequestId;

	/**
	 * Identifier of the worker associated with this entry.
	 *
	 * @var string|null
	 */
	public $workerId;

	/**
	 * Call arguments.
	 *
	 * @var RemoteObject[]|null
	 */
	public $args;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		if (isset($data->level)) {
			$instance->level = (string)$data->level;
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		if (isset($data->category)) {
			$instance->category = (string)$data->category;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->lineNumber)) {
			$instance->lineNumber = (int)$data->lineNumber;
		}
		if (isset($data->stackTrace)) {
			$instance->stackTrace = StackTrace::fromJson($data->stackTrace);
		}
		if (isset($data->networkRequestId)) {
			$instance->networkRequestId = (string)$data->networkRequestId;
		}
		if (isset($data->workerId)) {
			$instance->workerId = (string)$data->workerId;
		}
		if (isset($data->args)) {
			$instance->args = [];
			foreach ($data->args as $item) {
				$instance->args[] = RemoteObject::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->source !== null) {
			$data->source = $this->source;
		}
		if ($this->level !== null) {
			$data->level = $this->level;
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->category !== null) {
			$data->category = $this->category;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->lineNumber !== null) {
			$data->lineNumber = $this->lineNumber;
		}
		if ($this->stackTrace !== null) {
			$data->stackTrace = $this->stackTrace->jsonSerialize();
		}
		if ($this->networkRequestId !== null) {
			$data->networkRequestId = $this->networkRequestId;
		}
		if ($this->workerId !== null) {
			$data->workerId = $this->workerId;
		}
		if ($this->args !== null) {
			$data->args = [];
			foreach ($this->args as $item) {
				$data->args[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
