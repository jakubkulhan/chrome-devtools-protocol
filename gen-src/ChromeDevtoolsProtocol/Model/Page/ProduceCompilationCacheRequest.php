<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.produceCompilationCache command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ProduceCompilationCacheRequest implements \JsonSerializable
{
	/** @var CompilationCacheParams[] */
	public $scripts;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scripts)) {
			$instance->scripts = [];
			foreach ($data->scripts as $item) {
				$instance->scripts[] = CompilationCacheParams::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scripts !== null) {
			$data->scripts = [];
			foreach ($this->scripts as $item) {
				$data->scripts[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ProduceCompilationCacheRequestBuilder
	 */
	public static function builder(): ProduceCompilationCacheRequestBuilder
	{
		return new ProduceCompilationCacheRequestBuilder();
	}
}
