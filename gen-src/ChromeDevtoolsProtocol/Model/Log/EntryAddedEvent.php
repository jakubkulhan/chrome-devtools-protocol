<?php

namespace ChromeDevtoolsProtocol\Model\Log;

/**
 * Issued when new message was logged.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EntryAddedEvent implements \JsonSerializable
{
	/**
	 * The entry.
	 *
	 * @var LogEntry
	 */
	public $entry;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->entry)) {
			$instance->entry = LogEntry::fromJson($data->entry);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->entry !== null) {
			$data->entry = $this->entry->jsonSerialize();
		}
		return $data;
	}
}
