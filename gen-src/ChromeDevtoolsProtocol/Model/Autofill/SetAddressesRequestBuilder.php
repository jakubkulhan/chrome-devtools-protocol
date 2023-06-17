<?php

namespace ChromeDevtoolsProtocol\Model\Autofill;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAddressesRequestBuilder
{
	private $addresses;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAddressesRequest
	{
		$instance = new SetAddressesRequest();
		if ($this->addresses === null) {
			throw new BuilderException('Property [addresses] is required.');
		}
		$instance->addresses = $this->addresses;
		return $instance;
	}


	/**
	 * @param Address[] $addresses
	 *
	 * @return self
	 */
	public function setAddresses($addresses): self
	{
		$this->addresses = $addresses;
		return $this;
	}
}
