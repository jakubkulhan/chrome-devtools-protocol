<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Details of post layout rendered text positions. The exact layout should not be regarded as stable and may change between versions.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InlineTextBox implements \JsonSerializable
{
	/**
	 * The bounding box in document coordinates. Note that scroll offset of the document is ignored.
	 *
	 * @var Rect
	 */
	public $boundingBox;

	/**
	 * The starting index in characters, for this post layout textbox substring. Characters that would be represented as a surrogate pair in UTF-16 have length 2.
	 *
	 * @var int
	 */
	public $startCharacterIndex;

	/**
	 * The number of characters in this post layout textbox substring. Characters that would be represented as a surrogate pair in UTF-16 have length 2.
	 *
	 * @var int
	 */
	public $numCharacters;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->boundingBox)) {
			$instance->boundingBox = Rect::fromJson($data->boundingBox);
		}
		if (isset($data->startCharacterIndex)) {
			$instance->startCharacterIndex = (int)$data->startCharacterIndex;
		}
		if (isset($data->numCharacters)) {
			$instance->numCharacters = (int)$data->numCharacters;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->boundingBox !== null) {
			$data->boundingBox = $this->boundingBox->jsonSerialize();
		}
		if ($this->startCharacterIndex !== null) {
			$data->startCharacterIndex = $this->startCharacterIndex;
		}
		if ($this->numCharacters !== null) {
			$data->numCharacters = $this->numCharacters;
		}
		return $data;
	}
}
