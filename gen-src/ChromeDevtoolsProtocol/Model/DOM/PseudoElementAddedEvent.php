<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Called when a pseudo element is added to an element.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PseudoElementAddedEvent implements \JsonSerializable
{
	/**
	 * Pseudo element's parent element id.
	 *
	 * @var int
	 */
	public $parentId;

	/**
	 * The added pseudo element.
	 *
	 * @var Node
	 */
	public $pseudoElement;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->parentId)) {
			$instance->parentId = (int)$data->parentId;
		}
		if (isset($data->pseudoElement)) {
			$instance->pseudoElement = Node::fromJson($data->pseudoElement);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->parentId !== null) {
			$data->parentId = $this->parentId;
		}
		if ($this->pseudoElement !== null) {
			$data->pseudoElement = $this->pseudoElement->jsonSerialize();
		}
		return $data;
	}
}
