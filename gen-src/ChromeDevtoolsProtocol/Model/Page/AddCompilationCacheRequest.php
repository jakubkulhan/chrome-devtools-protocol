<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.addCompilationCache command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddCompilationCacheRequest implements \JsonSerializable
{
	/** @var string */
	public $url;

	/**
	 * Base64-encoded data (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $data;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddCompilationCacheRequestBuilder
	 */
	public static function builder(): AddCompilationCacheRequestBuilder
	{
		return new AddCompilationCacheRequestBuilder();
	}
}
