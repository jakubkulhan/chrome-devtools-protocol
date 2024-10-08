<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequest implements \JsonSerializable
{
	/**
	 * Whether to include whitespaces in the children array of returned Nodes.
	 *
	 * @var string|null
	 */
	public $includeWhitespace;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->includeWhitespace)) {
			$instance->includeWhitespace = (string)$data->includeWhitespace;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->includeWhitespace !== null) {
			$data->includeWhitespace = $this->includeWhitespace;
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
