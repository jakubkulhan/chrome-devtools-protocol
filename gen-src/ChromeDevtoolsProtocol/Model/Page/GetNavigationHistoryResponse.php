<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getNavigationHistory command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetNavigationHistoryResponse implements \JsonSerializable
{
	/**
	 * Index of the current navigation history entry.
	 *
	 * @var int
	 */
	public $currentIndex;

	/**
	 * Array of navigation history entries.
	 *
	 * @var NavigationEntry[]
	 */
	public $entries;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->currentIndex)) {
			$instance->currentIndex = (int)$data->currentIndex;
		}
		if (isset($data->entries)) {
			$instance->entries = [];
			foreach ($data->entries as $item) {
				$instance->entries[] = NavigationEntry::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->currentIndex !== null) {
			$data->currentIndex = $this->currentIndex;
		}
		if ($this->entries !== null) {
			$data->entries = [];
			foreach ($this->entries as $item) {
				$data->entries[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
