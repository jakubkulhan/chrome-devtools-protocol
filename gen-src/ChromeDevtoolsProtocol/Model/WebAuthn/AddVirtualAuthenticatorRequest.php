<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Request for WebAuthn.addVirtualAuthenticator command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddVirtualAuthenticatorRequest implements \JsonSerializable
{
	/** @var VirtualAuthenticatorOptions */
	public $options;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->options)) {
			$instance->options = VirtualAuthenticatorOptions::fromJson($data->options);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->options !== null) {
			$data->options = $this->options->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddVirtualAuthenticatorRequestBuilder
	 */
	public static function builder(): AddVirtualAuthenticatorRequestBuilder
	{
		return new AddVirtualAuthenticatorRequestBuilder();
	}
}
