<?php
namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Call frames for assertions or error messages.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StackTrace implements \JsonSerializable
{
	/**
	 * String label of this stack trace. For async traces this may be a name of the function that initiated the async call.
	 *
	 * @var string|null
	 */
	public $description;

	/**
	 * JavaScript function name.
	 *
	 * @var CallFrame[]
	 */
	public $callFrames;

	/**
	 * Asynchronous JavaScript stack trace that preceded this stack, if available.
	 *
	 * @var StackTrace|null
	 */
	public $parent;

	/**
	 * Creation frame of the Promise which produced the next synchronous trace when resolved, if available.
	 *
	 * @var CallFrame|null
	 */
	public $promiseCreationFrame;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->description)) {
			$instance->description = (string)$data->description;
		}
		if (isset($data->callFrames)) {
			$instance->callFrames = [];
			foreach ($data->callFrames as $item) {
				$instance->callFrames[] = CallFrame::fromJson($item);
			}
		}
		if (isset($data->parent)) {
			$instance->parent = StackTrace::fromJson($data->parent);
		}
		if (isset($data->promiseCreationFrame)) {
			$instance->promiseCreationFrame = CallFrame::fromJson($data->promiseCreationFrame);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->description !== null) {
			$data->description = $this->description;
		}
		if ($this->callFrames !== null) {
			$data->callFrames = [];
			foreach ($this->callFrames as $item) {
				$data->callFrames[] = $item->jsonSerialize();
			}
		}
		if ($this->parent !== null) {
			$data->parent = $this->parent->jsonSerialize();
		}
		if ($this->promiseCreationFrame !== null) {
			$data->promiseCreationFrame = $this->promiseCreationFrame->jsonSerialize();
		}
		return $data;
	}
}
