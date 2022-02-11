<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.navigateToHistoryEntry command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NavigateToHistoryEntryRequest implements \JsonSerializable
{
	/**
	 * Unique id of the entry to navigate to.
	 *
	 * @var int
	 */
	public $entryId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->entryId)) {
			$instance->entryId = (int)$data->entryId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->entryId !== null) {
			$data->entryId = $this->entryId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return NavigateToHistoryEntryRequestBuilder
	 */
	public static function builder(): NavigateToHistoryEntryRequestBuilder
	{
		return new NavigateToHistoryEntryRequestBuilder();
	}
}
