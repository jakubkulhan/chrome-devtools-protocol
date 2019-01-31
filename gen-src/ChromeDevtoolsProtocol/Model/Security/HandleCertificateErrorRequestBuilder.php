<?php

namespace ChromeDevtoolsProtocol\Model\Security;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HandleCertificateErrorRequestBuilder
{
	private $eventId;

	private $action;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): HandleCertificateErrorRequest
	{
		$instance = new HandleCertificateErrorRequest();
		if ($this->eventId === null) {
			throw new BuilderException('Property [eventId] is required.');
		}
		$instance->eventId = $this->eventId;
		if ($this->action === null) {
			throw new BuilderException('Property [action] is required.');
		}
		$instance->action = $this->action;
		return $instance;
	}


	/**
	 * @param int $eventId
	 *
	 * @return self
	 */
	public function setEventId($eventId): self
	{
		$this->eventId = $eventId;
		return $this;
	}


	/**
	 * @param string $action
	 *
	 * @return self
	 */
	public function setAction($action): self
	{
		$this->action = $action;
		return $this;
	}
}
