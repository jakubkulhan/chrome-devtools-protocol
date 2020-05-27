<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchPeriodicSyncEventRequestBuilder
{
	private $origin;
	private $registrationId;
	private $tag;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DispatchPeriodicSyncEventRequest
	{
		$instance = new DispatchPeriodicSyncEventRequest();
		if ($this->origin === null) {
			throw new BuilderException('Property [origin] is required.');
		}
		$instance->origin = $this->origin;
		if ($this->registrationId === null) {
			throw new BuilderException('Property [registrationId] is required.');
		}
		$instance->registrationId = $this->registrationId;
		if ($this->tag === null) {
			throw new BuilderException('Property [tag] is required.');
		}
		$instance->tag = $this->tag;
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
	 * @param string $tag
	 *
	 * @return self
	 */
	public function setTag($tag): self
	{
		$this->tag = $tag;
		return $this;
	}
}
