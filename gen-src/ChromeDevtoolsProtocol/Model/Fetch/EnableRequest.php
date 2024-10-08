<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Request for Fetch.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequest implements \JsonSerializable
{
	/**
	 * If specified, only requests matching any of these patterns will produce fetchRequested event and will be paused until clients response. If not set, all requests will be affected.
	 *
	 * @var RequestPattern[]|null
	 */
	public $patterns;

	/**
	 * If true, authRequired events will be issued and requests will be paused expecting a call to continueWithAuth.
	 *
	 * @var bool|null
	 */
	public $handleAuthRequests;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->patterns)) {
			$instance->patterns = [];
			foreach ($data->patterns as $item) {
				$instance->patterns[] = RequestPattern::fromJson($item);
			}
		}
		if (isset($data->handleAuthRequests)) {
			$instance->handleAuthRequests = (bool)$data->handleAuthRequests;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->patterns !== null) {
			$data->patterns = [];
			foreach ($this->patterns as $item) {
				$data->patterns[] = $item->jsonSerialize();
			}
		}
		if ($this->handleAuthRequests !== null) {
			$data->handleAuthRequests = $this->handleAuthRequests;
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
