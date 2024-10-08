<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetResponseOverrideBitsRequestBuilder
{
	private $authenticatorId;
	private $isBogusSignature;
	private $isBadUV;
	private $isBadUP;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetResponseOverrideBitsRequest
	{
		$instance = new SetResponseOverrideBitsRequest();
		if ($this->authenticatorId === null) {
			throw new BuilderException('Property [authenticatorId] is required.');
		}
		$instance->authenticatorId = $this->authenticatorId;
		$instance->isBogusSignature = $this->isBogusSignature;
		$instance->isBadUV = $this->isBadUV;
		$instance->isBadUP = $this->isBadUP;
		return $instance;
	}


	/**
	 * @param string $authenticatorId
	 *
	 * @return self
	 */
	public function setAuthenticatorId($authenticatorId): self
	{
		$this->authenticatorId = $authenticatorId;
		return $this;
	}


	/**
	 * @param bool|null $isBogusSignature
	 *
	 * @return self
	 */
	public function setIsBogusSignature($isBogusSignature): self
	{
		$this->isBogusSignature = $isBogusSignature;
		return $this;
	}


	/**
	 * @param bool|null $isBadUV
	 *
	 * @return self
	 */
	public function setIsBadUV($isBadUV): self
	{
		$this->isBadUV = $isBadUV;
		return $this;
	}


	/**
	 * @param bool|null $isBadUP
	 *
	 * @return self
	 */
	public function setIsBadUP($isBadUP): self
	{
		$this->isBadUP = $isBadUP;
		return $this;
	}
}
