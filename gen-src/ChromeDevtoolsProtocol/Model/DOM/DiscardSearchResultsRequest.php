<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.discardSearchResults command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DiscardSearchResultsRequest implements \JsonSerializable
{
	/**
	 * Unique search session identifier.
	 *
	 * @var string
	 */
	public $searchId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->searchId !== null) {
			$data->searchId = $this->searchId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DiscardSearchResultsRequestBuilder
	 */
	public static function builder(): DiscardSearchResultsRequestBuilder
	{
		return new DiscardSearchResultsRequestBuilder();
	}
}
