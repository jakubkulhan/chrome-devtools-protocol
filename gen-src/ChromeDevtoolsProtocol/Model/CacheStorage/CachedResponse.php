<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Cached response
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CachedResponse implements \JsonSerializable
{
	/**
	 * Entry content, base64-encoded. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $body;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->body)) {
			$instance->body = (string)$data->body;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->body !== null) {
			$data->body = $this->body;
		}
		return $data;
	}
}
