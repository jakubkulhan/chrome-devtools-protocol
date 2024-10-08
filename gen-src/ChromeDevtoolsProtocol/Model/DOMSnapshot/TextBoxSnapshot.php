<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Table of details of the post layout rendered text positions. The exact layout should not be regarded as stable and may change between versions.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TextBoxSnapshot implements \JsonSerializable
{
	/**
	 * Index of the layout tree node that owns this box collection.
	 *
	 * @var int[]
	 */
	public $layoutIndex;

	/**
	 * The absolute position bounding box.
	 *
	 * @var int[][]|float[][]
	 */
	public $bounds;

	/**
	 * The starting index in characters, for this post layout textbox substring. Characters that would be represented as a surrogate pair in UTF-16 have length 2.
	 *
	 * @var int[]
	 */
	public $start;

	/**
	 * The number of characters in this post layout textbox substring. Characters that would be represented as a surrogate pair in UTF-16 have length 2.
	 *
	 * @var int[]
	 */
	public $length;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->layoutIndex)) {
			$instance->layoutIndex = [];
			foreach ($data->layoutIndex as $item) {
				$instance->layoutIndex[] = (int)$item;
			}
		}
		if (isset($data->bounds)) {
			$instance->bounds = [];
		if (isset($data->bounds)) {
			$instance->bounds = [];
			foreach ($data->bounds as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$instance->bounds[] = $nested;
			}
		}
		}
		if (isset($data->start)) {
			$instance->start = [];
			foreach ($data->start as $item) {
				$instance->start[] = (int)$item;
			}
		}
		if (isset($data->length)) {
			$instance->length = [];
			foreach ($data->length as $item) {
				$instance->length[] = (int)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->layoutIndex !== null) {
			$data->layoutIndex = [];
			foreach ($this->layoutIndex as $item) {
				$data->layoutIndex[] = $item;
			}
		}
		if ($this->bounds !== null) {
			$data->bounds = [];
		if ($this->bounds !== null) {
			$data->bounds = [];
			foreach ($this->bounds as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->bounds[] = $nested;
			}
		}
		}
		if ($this->start !== null) {
			$data->start = [];
			foreach ($this->start as $item) {
				$data->start[] = $item;
			}
		}
		if ($this->length !== null) {
			$data->length = [];
			foreach ($this->length as $item) {
				$data->length[] = $item;
			}
		}
		return $data;
	}
}
