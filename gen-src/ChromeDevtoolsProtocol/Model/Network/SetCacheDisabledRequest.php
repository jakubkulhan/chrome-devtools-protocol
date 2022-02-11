<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setCacheDisabled command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCacheDisabledRequest implements \JsonSerializable
{
	/**
	 * Cache disabled state.
	 *
	 * @var bool
	 */
	public $cacheDisabled;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cacheDisabled)) {
			$instance->cacheDisabled = (bool)$data->cacheDisabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cacheDisabled !== null) {
			$data->cacheDisabled = $this->cacheDisabled;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetCacheDisabledRequestBuilder
	 */
	public static function builder(): SetCacheDisabledRequestBuilder
	{
		return new SetCacheDisabledRequestBuilder();
	}
}
