<?php

namespace ChromeDevtoolsProtocol\Model\CrashReportContext;

/**
 * Response to CrashReportContext.getEntries command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetEntriesResponse implements \JsonSerializable
{
	/** @var CrashReportContextEntry[] */
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
			foreach ($data->entries as $item) {
				$instance->entries[] = CrashReportContextEntry::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->entries !== null) {
			$data->entries = [];
			foreach ($this->entries as $item) {
				$data->entries[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
