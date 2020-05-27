<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeliverPushMessageRequestBuilder
{
	private $origin;
	private $registrationId;
	private $data;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeliverPushMessageRequest
	{
		$instance = new DeliverPushMessageRequest();
		if ($this->origin === null) {
			throw new BuilderException('Property [origin] is required.');
		}
		$instance->origin = $this->origin;
		if ($this->registrationId === null) {
			throw new BuilderException('Property [registrationId] is required.');
		}
		$instance->registrationId = $this->registrationId;
		if ($this->data === null) {
			throw new BuilderException('Property [data] is required.');
		}
		$instance->data = $this->data;
		return $instance;
	}


	/**
	 * @param string $origin
	 *
	 * @return self
	 */
	public function setOrigin($origin): self
	{
		$this->origin = $origin;
		return $this;
	}


	/**
	 * @param string $registrationId
	 *
	 * @return self
	 */
	public function setRegistrationId($registrationId): self
	{
		$this->registrationId = $registrationId;
		return $this;
	}


	/**
	 * @param string $data
	 *
	 * @return self
	 */
	public function setData($data): self
	{
		$this->data = $data;
		return $this;
	}
}
