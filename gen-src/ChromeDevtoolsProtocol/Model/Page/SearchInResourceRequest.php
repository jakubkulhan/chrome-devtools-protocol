<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.searchInResource command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SearchInResourceRequest implements \JsonSerializable
{
	/**
	 * Frame id for resource to search in.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * URL of the resource to search in.
	 *
	 * @var string
	 */
	public $url;

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
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
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
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
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
	 * @return SearchInResourceRequestBuilder
	 */
	public static function builder(): SearchInResourceRequestBuilder
	{
		return new SearchInResourceRequestBuilder();
	}
}
