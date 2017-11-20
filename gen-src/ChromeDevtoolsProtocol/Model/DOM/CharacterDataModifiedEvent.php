<?php
namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Mirrors <code>DOMCharacterDataModified</code> event.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CharacterDataModifiedEvent implements \JsonSerializable
{
	/**
	 * Id of the node that has changed.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * New text value.
	 *
	 * @var string
	 */
	public $characterData;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->characterData)) {
			$instance->characterData = (string)$data->characterData;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->characterData !== null) {
			$data->characterData = $this->characterData;
		}
		return $data;
	}
}
