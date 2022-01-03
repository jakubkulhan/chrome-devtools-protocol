<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Issued for every compilation cache generated. Is only available if Page.setGenerateCompilationCache is enabled.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CompilationCacheProducedEvent implements \JsonSerializable
{
	/** @var string */
	public $url;

	/**
	 * Base64-encoded data (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $data;


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


	public function jsonSerialize(): mixed
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
}
