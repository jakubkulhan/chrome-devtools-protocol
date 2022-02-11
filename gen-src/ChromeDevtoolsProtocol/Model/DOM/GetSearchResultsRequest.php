<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getSearchResults command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSearchResultsRequest implements \JsonSerializable
{
	/**
	 * Unique search session identifier.
	 *
	 * @var string
	 */
	public $searchId;

	/**
	 * Start index of the search result to be returned.
	 *
	 * @var int
	 */
	public $fromIndex;

	/**
	 * End index of the search result to be returned.
	 *
	 * @var int
	 */
	public $toIndex;


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
		if (isset($data->fromIndex)) {
			$instance->fromIndex = (int)$data->fromIndex;
		}
		if (isset($data->toIndex)) {
			$instance->toIndex = (int)$data->toIndex;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->searchId !== null) {
			$data->searchId = $this->searchId;
		}
		if ($this->fromIndex !== null) {
			$data->fromIndex = $this->fromIndex;
		}
		if ($this->toIndex !== null) {
			$data->toIndex = $this->toIndex;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetSearchResultsRequestBuilder
	 */
	public static function builder(): GetSearchResultsRequestBuilder
	{
		return new GetSearchResultsRequestBuilder();
	}
}
