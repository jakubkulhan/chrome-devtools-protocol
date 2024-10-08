<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Called when a pseudo element is removed from an element.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PseudoElementRemovedEvent implements \JsonSerializable
{
	/**
	 * Pseudo element's parent element id.
	 *
	 * @var int
	 */
	public $parentId;

	/**
	 * The removed pseudo element id.
	 *
	 * @var int
	 */
	public $pseudoElementId;


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
		if (isset($data->pseudoElementId)) {
			$instance->pseudoElementId = (int)$data->pseudoElementId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->parentId !== null) {
			$data->parentId = $this->parentId;
		}
		if ($this->pseudoElementId !== null) {
			$data->pseudoElementId = $this->pseudoElementId;
		}
		return $data;
	}
}
