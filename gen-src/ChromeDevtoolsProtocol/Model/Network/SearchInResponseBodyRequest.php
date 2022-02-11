<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.searchInResponseBody command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SearchInResponseBodyRequest implements \JsonSerializable
{
	/**
	 * Identifier of the network response to search.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * String to search for.
	 *
	 * @var string
	 */
	public $query;

	/**
	 * If true, search is case sensitive.
	 *
	 * @var bool|null
	 */
	public $caseSensitive;

	/**
	 * If true, treats string parameter as regex.
	 *
	 * @var bool|null
	 */
	public $isRegex;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->query)) {
			$instance->query = (string)$data->query;
		}
		if (isset($data->caseSensitive)) {
			$instance->caseSensitive = (bool)$data->caseSensitive;
		}
		if (isset($data->isRegex)) {
			$instance->isRegex = (bool)$data->isRegex;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->query !== null) {
			$data->query = $this->query;
		}
		if ($this->caseSensitive !== null) {
			$data->caseSensitive = $this->caseSensitive;
		}
		if ($this->isRegex !== null) {
			$data->isRegex = $this->isRegex;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SearchInResponseBodyRequestBuilder
	 */
	public static function builder(): SearchInResponseBodyRequestBuilder
	{
		return new SearchInResponseBodyRequestBuilder();
	}
}
