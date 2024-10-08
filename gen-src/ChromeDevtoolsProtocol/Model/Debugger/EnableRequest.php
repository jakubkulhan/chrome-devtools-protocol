<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequest implements \JsonSerializable
{
	/**
	 * The maximum size in bytes of collected scripts (not referenced by other heap objects) the debugger can hold. Puts no limit if parameter is omitted.
	 *
	 * @var int|float|null
	 */
	public $maxScriptsCacheSize;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->maxScriptsCacheSize)) {
			$instance->maxScriptsCacheSize = $data->maxScriptsCacheSize;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->maxScriptsCacheSize !== null) {
			$data->maxScriptsCacheSize = $this->maxScriptsCacheSize;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EnableRequestBuilder
	 */
	public static function builder(): EnableRequestBuilder
	{
		return new EnableRequestBuilder();
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
