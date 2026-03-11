<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;

/**
 * Definition of a tool that can be invoked.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Tool implements \JsonSerializable
{
	/**
	 * Tool name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Tool description.
	 *
	 * @var string
	 */
	public $description;

	/**
	 * Schema for the tool's input parameters.
	 *
	 * @var object|null
	 */
	public $inputSchema;

	/**
	 * Optional annotations for the tool.
	 *
	 * @var Annotation|null
	 */
	public $annotations;

	/**
	 * Frame identifier associated with the tool registration.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Optional node ID for declarative tools.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * The stack trace at the time of the registration.
	 *
	 * @var StackTrace|null
	 */
	public $stackTrace;


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
		if (isset($data->description)) {
			$instance->description = (string)$data->description;
		}
		if (isset($data->inputSchema)) {
			$instance->inputSchema = $data->inputSchema;
		}
		if (isset($data->annotations)) {
			$instance->annotations = Annotation::fromJson($data->annotations);
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->stackTrace)) {
			$instance->stackTrace = StackTrace::fromJson($data->stackTrace);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->description !== null) {
			$data->description = $this->description;
		}
		if ($this->inputSchema !== null) {
			$data->inputSchema = $this->inputSchema;
		}
		if ($this->annotations !== null) {
			$data->annotations = $this->annotations->jsonSerialize();
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->stackTrace !== null) {
			$data->stackTrace = $this->stackTrace->jsonSerialize();
		}
		return $data;
	}
}
