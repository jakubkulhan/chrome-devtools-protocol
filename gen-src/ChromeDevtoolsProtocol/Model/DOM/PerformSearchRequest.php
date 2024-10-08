<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.performSearch command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PerformSearchRequest implements \JsonSerializable
{
	/**
	 * Plain text or query selector or XPath search query.
	 *
	 * @var string
	 */
	public $query;

	/**
	 * True to search in user agent shadow DOM.
	 *
	 * @var bool|null
	 */
	public $includeUserAgentShadowDOM;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->query)) {
			$instance->query = (string)$data->query;
		}
		if (isset($data->includeUserAgentShadowDOM)) {
			$instance->includeUserAgentShadowDOM = (bool)$data->includeUserAgentShadowDOM;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->query !== null) {
			$data->query = $this->query;
		}
		if ($this->includeUserAgentShadowDOM !== null) {
			$data->includeUserAgentShadowDOM = $this->includeUserAgentShadowDOM;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return PerformSearchRequestBuilder
	 */
	public static function builder(): PerformSearchRequestBuilder
	{
		return new PerformSearchRequestBuilder();
	}
}
