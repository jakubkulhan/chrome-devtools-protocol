<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getDocument command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDocumentRequest implements \JsonSerializable
{
	/**
	 * The maximum depth at which children should be retrieved, defaults to 1. Use -1 for the entire subtree or provide an integer larger than 0.
	 *
	 * @var int|null
	 */
	public $depth;

	/**
	 * Whether or not iframes and shadow roots should be traversed when returning the subtree (default is false).
	 *
	 * @var bool|null
	 */
	public $pierce;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->depth)) {
			$instance->depth = (int)$data->depth;
		}
		if (isset($data->pierce)) {
			$instance->pierce = (bool)$data->pierce;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->depth !== null) {
			$data->depth = $this->depth;
		}
		if ($this->pierce !== null) {
			$data->pierce = $this->pierce;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetDocumentRequestBuilder
	 */
	public static function builder(): GetDocumentRequestBuilder
	{
		return new GetDocumentRequestBuilder();
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
