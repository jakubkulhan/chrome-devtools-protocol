<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Details of an element in the DOM tree with a LayoutObject.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LayoutTreeSnapshot implements \JsonSerializable
{
	/**
	 * The index of the related DOM node in the `domNodes` array returned by `getSnapshot`.
	 *
	 * @var int[]
	 */
	public $nodeIndex;

	/**
	 * Index into the `computedStyles` array returned by `captureSnapshot`.
	 *
	 * @var int[][]
	 */
	public $styles;

	/**
	 * The absolute position bounding box.
	 *
	 * @var int[][]|float[][]
	 */
	public $bounds;

	/**
	 * Contents of the LayoutText, if any.
	 *
	 * @var int[]
	 */
	public $text;

	/**
	 * Stacking context information.
	 *
	 * @var RareBooleanData
	 */
	public $stackingContexts;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeIndex)) {
			$instance->nodeIndex = [];
			foreach ($data->nodeIndex as $item) {
				$instance->nodeIndex[] = (int)$item;
			}
		}
		if (isset($data->styles)) {
			$instance->styles = [];
		if (isset($data->styles)) {
			$instance->styles = [];
			foreach ($data->styles as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = (int)$nestedItem;
				}
				$instance->styles[] = $nested;
			}
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
		if (isset($data->text)) {
			$instance->text = [];
		if (isset($data->text)) {
			$instance->text = [];
			foreach ($data->text as $item) {
				$instance->text[] = (int)$item;
			}
		}
		}
		if (isset($data->stackingContexts)) {
			$instance->stackingContexts = RareBooleanData::fromJson($data->stackingContexts);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeIndex !== null) {
			$data->nodeIndex = [];
			foreach ($this->nodeIndex as $item) {
				$data->nodeIndex[] = $item;
			}
		}
		if ($this->styles !== null) {
			$data->styles = [];
		if ($this->styles !== null) {
			$data->styles = [];
			foreach ($this->styles as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->styles[] = $nested;
			}
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
		if ($this->text !== null) {
			$data->text = [];
		if ($this->text !== null) {
			$data->text = [];
			foreach ($this->text as $item) {
				$data->text[] = $item;
			}
		}
		}
		if ($this->stackingContexts !== null) {
			$data->stackingContexts = $this->stackingContexts->jsonSerialize();
		}
		return $data;
	}
}
