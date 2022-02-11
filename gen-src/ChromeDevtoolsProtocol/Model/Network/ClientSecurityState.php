<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.ClientSecurityState.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClientSecurityState implements \JsonSerializable
{
	/** @var bool */
	public $initiatorIsSecureContext;

	/** @var string */
	public $initiatorIPAddressSpace;

	/** @var string */
	public $privateNetworkRequestPolicy;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->initiatorIsSecureContext)) {
			$instance->initiatorIsSecureContext = (bool)$data->initiatorIsSecureContext;
		}
		if (isset($data->initiatorIPAddressSpace)) {
			$instance->initiatorIPAddressSpace = (string)$data->initiatorIPAddressSpace;
		}
		if (isset($data->privateNetworkRequestPolicy)) {
			$instance->privateNetworkRequestPolicy = (string)$data->privateNetworkRequestPolicy;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->initiatorIsSecureContext !== null) {
			$data->initiatorIsSecureContext = $this->initiatorIsSecureContext;
		}
		if ($this->initiatorIPAddressSpace !== null) {
			$data->initiatorIPAddressSpace = $this->initiatorIPAddressSpace;
		}
		if ($this->privateNetworkRequestPolicy !== null) {
			$data->privateNetworkRequestPolicy = $this->privateNetworkRequestPolicy;
		}
		return $data;
	}
}
