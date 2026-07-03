<?php

namespace ChromeDevtoolsProtocol\Model\DigitalCredentials;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVirtualWalletBehaviorRequestBuilder
{
	private $behavior;
	private $protocol;
	private $response;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetVirtualWalletBehaviorRequest
	{
		$instance = new SetVirtualWalletBehaviorRequest();
		if ($this->behavior === null) {
			throw new BuilderException('Property [behavior] is required.');
		}
		$instance->behavior = $this->behavior;
		$instance->protocol = $this->protocol;
		$instance->response = $this->response;
		return $instance;
	}


	/**
	 * @param string $behavior
	 *
	 * @return self
	 */
	public function setBehavior($behavior): self
	{
		$this->behavior = $behavior;
		return $this;
	}


	/**
	 * @param string|null $protocol
	 *
	 * @return self
	 */
	public function setProtocol($protocol): self
	{
		$this->protocol = $protocol;
		return $this;
	}


	/**
	 * @param object|null $response
	 *
	 * @return self
	 */
	public function setResponse($response): self
	{
		$this->response = $response;
		return $this;
	}
}
