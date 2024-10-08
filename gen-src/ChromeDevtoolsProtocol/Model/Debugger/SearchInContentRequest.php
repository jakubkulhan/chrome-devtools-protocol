<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.searchInContent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SearchInContentRequest implements \JsonSerializable
{
	/**
	 * Id of the script to search in.
	 *
	 * @var string
	 */
	public $scriptId;

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
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
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
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
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
	 * @return SearchInContentRequestBuilder
	 */
	public static function builder(): SearchInContentRequestBuilder
	{
		return new SearchInContentRequestBuilder();
	}
}
