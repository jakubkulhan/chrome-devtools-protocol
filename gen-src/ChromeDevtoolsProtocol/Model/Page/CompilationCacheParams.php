<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Per-script compilation cache parameters for `Page.produceCompilationCache`
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CompilationCacheParams implements \JsonSerializable
{
	/**
	 * The URL of the script to produce a compilation cache entry for.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * A hint to the backend whether eager compilation is recommended. (the actual compilation mode used is upon backend discretion).
	 *
	 * @var bool|null
	 */
	public $eager;


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
		if (isset($data->eager)) {
			$instance->eager = (bool)$data->eager;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->eager !== null) {
			$data->eager = $this->eager;
		}
		return $data;
	}
}
