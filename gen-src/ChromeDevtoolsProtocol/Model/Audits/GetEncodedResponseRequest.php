<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Request for Audits.getEncodedResponse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetEncodedResponseRequest implements \JsonSerializable
{
	/**
	 * Identifier of the network request to get content for.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * The encoding to use.
	 *
	 * @var string
	 */
	public $encoding;

	/**
	 * The quality of the encoding (0-1). (defaults to 1)
	 *
	 * @var int|float|null
	 */
	public $quality;

	/**
	 * Whether to only return the size information (defaults to false).
	 *
	 * @var bool|null
	 */
	public $sizeOnly;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->encoding)) {
			$instance->encoding = (string)$data->encoding;
		}
		if (isset($data->quality)) {
			$instance->quality = $data->quality;
		}
		if (isset($data->sizeOnly)) {
			$instance->sizeOnly = (bool)$data->sizeOnly;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->encoding !== null) {
			$data->encoding = $this->encoding;
		}
		if ($this->quality !== null) {
			$data->quality = $this->quality;
		}
		if ($this->sizeOnly !== null) {
			$data->sizeOnly = $this->sizeOnly;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetEncodedResponseRequestBuilder
	 */
	public static function builder(): GetEncodedResponseRequestBuilder
	{
		return new GetEncodedResponseRequestBuilder();
	}
}
