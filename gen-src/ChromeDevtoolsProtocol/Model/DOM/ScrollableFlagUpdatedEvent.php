<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Fired when a node's scrollability state changes.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScrollableFlagUpdatedEvent implements \JsonSerializable
{
	/**
	 * The id of the node.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * If the node is scrollable.
	 *
	 * @var bool
	 */
	public $isScrollable;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->isScrollable)) {
			$instance->isScrollable = (bool)$data->isScrollable;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->isScrollable !== null) {
			$data->isScrollable = $this->isScrollable;
		}
		return $data;
	}
}
