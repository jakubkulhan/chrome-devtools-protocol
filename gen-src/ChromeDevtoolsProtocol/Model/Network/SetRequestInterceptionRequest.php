<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setRequestInterception command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRequestInterceptionRequest implements \JsonSerializable
{
	/**
	 * Requests matching any of these patterns will be forwarded and wait for the corresponding continueInterceptedRequest call.
	 *
	 * @var RequestPattern[]
	 */
	public $patterns;


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
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetRequestInterceptionRequestBuilder
	 */
	public static function builder(): SetRequestInterceptionRequestBuilder
	{
		return new SetRequestInterceptionRequestBuilder();
	}
}
