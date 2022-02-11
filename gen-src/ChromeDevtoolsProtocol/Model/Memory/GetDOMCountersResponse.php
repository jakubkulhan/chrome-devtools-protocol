<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * Response to Memory.getDOMCounters command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDOMCountersResponse implements \JsonSerializable
{
	/** @var int */
	public $documents;

	/** @var int */
	public $nodes;

	/** @var int */
	public $jsEventListeners;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->documents)) {
			$instance->documents = (int)$data->documents;
		}
		if (isset($data->nodes)) {
			$instance->nodes = (int)$data->nodes;
		}
		if (isset($data->jsEventListeners)) {
			$instance->jsEventListeners = (int)$data->jsEventListeners;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->documents !== null) {
			$data->documents = $this->documents;
		}
		if ($this->nodes !== null) {
			$data->nodes = $this->nodes;
		}
		if ($this->jsEventListeners !== null) {
			$data->jsEventListeners = $this->jsEventListeners;
		}
		return $data;
	}
}
