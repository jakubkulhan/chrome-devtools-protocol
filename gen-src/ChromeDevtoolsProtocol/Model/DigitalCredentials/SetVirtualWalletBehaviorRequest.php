<?php

namespace ChromeDevtoolsProtocol\Model\DigitalCredentials;

/**
 * Request for DigitalCredentials.setVirtualWalletBehavior command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVirtualWalletBehaviorRequest implements \JsonSerializable
{
	/**
	 * The action of the virtual wallet.
	 *
	 * @var string
	 */
	public $action;

	/**
	 * The protocol identifier (e.g. "openid4vp"). Required when |action| is "respond", forbidden otherwise.
	 *
	 * @var string|null
	 */
	public $protocol;

	/**
	 * The response data object returned by the wallet. Required when |action| is "respond", forbidden otherwise.
	 *
	 * @var object|null
	 */
	public $response;

	/**
	 * The frame to scope the virtual wallet behavior to.
	 *
	 * @var string
	 */
	public $frameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->action)) {
			$instance->action = (string)$data->action;
		}
		if (isset($data->protocol)) {
			$instance->protocol = (string)$data->protocol;
		}
		if (isset($data->response)) {
			$instance->response = $data->response;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->action !== null) {
			$data->action = $this->action;
		}
		if ($this->protocol !== null) {
			$data->protocol = $this->protocol;
		}
		if ($this->response !== null) {
			$data->response = $this->response;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetVirtualWalletBehaviorRequestBuilder
	 */
	public static function builder(): SetVirtualWalletBehaviorRequestBuilder
	{
		return new SetVirtualWalletBehaviorRequestBuilder();
	}
}
