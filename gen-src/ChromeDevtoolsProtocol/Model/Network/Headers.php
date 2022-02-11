<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ArrayIterator;
use ChromeDevtoolsProtocol\Util\HeadersUtil;

/**
 * Request / response headers as keys / values of JSON object.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Headers implements \JsonSerializable, \IteratorAggregate
{
	/** Raw data. */
	private $rawData;

	/** Normalized headers data. */
	private $headers;


	public function __construct($rawData)
	{
		$this->rawData = $rawData;
		$this->headers = [];
		foreach ($this->rawData as $key => $value) {
			$this->headers[HeadersUtil::normalize($key)] = $value;
		}
	}


	/**
	 * @param object $rawData
	 */
	public static function fromJson($rawData)
	{
		return new static($rawData);
	}


	public function jsonSerialize()
	{
		return $this->rawData;
	}


	public function getRawData()
	{
		return $this->rawData;
	}


	public function get(string $key, $default = null)
	{
		$key = HeadersUtil::normalize($key);
		if (!array_key_exists($key, $this->headers)) {
			return $default;
		}
		return $this->headers[$key];
	}


	public function has(string $key): bool
	{
		$key = HeadersUtil::normalize($key);
		return array_key_exists($key, $this->headers);
	}


	public function all(): array
	{
		return $this->headers;
	}


	public function getIterator(): ArrayIterator
	{
		return new ArrayIterator($this->headers);
	}
}
