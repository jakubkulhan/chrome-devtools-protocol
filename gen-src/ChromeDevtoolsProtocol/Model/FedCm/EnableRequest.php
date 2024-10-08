<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * Request for FedCm.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequest implements \JsonSerializable
{
	/**
	 * Allows callers to disable the promise rejection delay that would normally happen, if this is unimportant to what's being tested. (step 4 of https://fedidcg.github.io/FedCM/#browser-api-rp-sign-in)
	 *
	 * @var bool|null
	 */
	public $disableRejectionDelay;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->disableRejectionDelay)) {
			$instance->disableRejectionDelay = (bool)$data->disableRejectionDelay;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->disableRejectionDelay !== null) {
			$data->disableRejectionDelay = $this->disableRejectionDelay;
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
