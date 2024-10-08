<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Response to DOM.performSearch command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PerformSearchResponse implements \JsonSerializable
{
	/**
	 * Unique search session identifier.
	 *
	 * @var string
	 */
	public $searchId;

	/**
	 * Number of search results.
	 *
	 * @var int
	 */
	public $resultCount;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->searchId)) {
			$instance->searchId = (string)$data->searchId;
		}
		if (isset($data->resultCount)) {
			$instance->resultCount = (int)$data->resultCount;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->searchId !== null) {
			$data->searchId = $this->searchId;
		}
		if ($this->resultCount !== null) {
			$data->resultCount = $this->resultCount;
		}
		return $data;
	}
}
