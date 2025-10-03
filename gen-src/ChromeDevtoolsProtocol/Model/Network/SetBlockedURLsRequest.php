<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setBlockedURLs command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBlockedURLsRequest implements \JsonSerializable
{
	/**
	 * URL patterns to block. Patterns use the URLPattern constructor string syntax (https://urlpattern.spec.whatwg.org/). Example: `*://*:* /*.css`.
	 *
	 * @var string[]|null
	 */
	public $urlPatterns;

	/**
	 * URL patterns to block. Wildcards ('*') are allowed.
	 *
	 * @var string[]|null
	 */
	public $urls;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->urlPatterns)) {
			$instance->urlPatterns = [];
			foreach ($data->urlPatterns as $item) {
				$instance->urlPatterns[] = (string)$item;
			}
		}
		if (isset($data->urls)) {
			$instance->urls = [];
			foreach ($data->urls as $item) {
				$instance->urls[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->urlPatterns !== null) {
			$data->urlPatterns = [];
			foreach ($this->urlPatterns as $item) {
				$data->urlPatterns[] = $item;
			}
		}
		if ($this->urls !== null) {
			$data->urls = [];
			foreach ($this->urls as $item) {
				$data->urls[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBlockedURLsRequestBuilder
	 */
	public static function builder(): SetBlockedURLsRequestBuilder
	{
		return new SetBlockedURLsRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
