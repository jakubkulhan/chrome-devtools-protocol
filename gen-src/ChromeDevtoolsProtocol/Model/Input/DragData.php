<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Named type Input.DragData.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DragData implements \JsonSerializable
{
	/** @var DragDataItem[] */
	public $items;

	/**
	 * List of filenames that should be included when dropping
	 *
	 * @var string[]|null
	 */
	public $files;

	/**
	 * Bit field representing allowed drag operations. Copy = 1, Link = 2, Move = 16
	 *
	 * @var int
	 */
	public $dragOperationsMask;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->items)) {
			$instance->items = [];
			foreach ($data->items as $item) {
				$instance->items[] = DragDataItem::fromJson($item);
			}
		}
		if (isset($data->files)) {
			$instance->files = [];
			foreach ($data->files as $item) {
				$instance->files[] = (string)$item;
			}
		}
		if (isset($data->dragOperationsMask)) {
			$instance->dragOperationsMask = (int)$data->dragOperationsMask;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->items !== null) {
			$data->items = [];
			foreach ($this->items as $item) {
				$data->items[] = $item->jsonSerialize();
			}
		}
		if ($this->files !== null) {
			$data->files = [];
			foreach ($this->files as $item) {
				$data->files[] = $item;
			}
		}
		if ($this->dragOperationsMask !== null) {
			$data->dragOperationsMask = $this->dragOperationsMask;
		}
		return $data;
	}
}
