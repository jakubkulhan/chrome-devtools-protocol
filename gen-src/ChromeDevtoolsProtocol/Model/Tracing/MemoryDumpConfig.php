<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Configuration for memory dump. Used only when "memory-infra" category is enabled.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MemoryDumpConfig implements \JsonSerializable
{
	/** Raw data. */
	private $rawData;


	public function __construct($rawData)
	{
		$this->rawData = $rawData;
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
}
