<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

/**
 * Response to DOMStorage.getDOMStorageItems command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDOMStorageItemsResponse implements \JsonSerializable
{
	/** @var string[][] */
	public $entries;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->entries)) {
			$instance->entries = [];
		if (isset($data->entries)) {
			$instance->entries = [];
			foreach ($data->entries as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = (string)$nestedItem;
				}
				$instance->entries[] = $nested;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->entries !== null) {
			$data->entries = [];
		if ($this->entries !== null) {
			$data->entries = [];
			foreach ($this->entries as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->entries[] = $nested;
			}
		}
		}
		return $data;
	}
}
