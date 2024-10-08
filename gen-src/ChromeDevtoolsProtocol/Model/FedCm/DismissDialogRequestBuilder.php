<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DismissDialogRequestBuilder
{
	private $dialogId;
	private $triggerCooldown;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DismissDialogRequest
	{
		$instance = new DismissDialogRequest();
		if ($this->dialogId === null) {
			throw new BuilderException('Property [dialogId] is required.');
		}
		$instance->dialogId = $this->dialogId;
		$instance->triggerCooldown = $this->triggerCooldown;
		return $instance;
	}


	/**
	 * @param string $dialogId
	 *
	 * @return self
	 */
	public function setDialogId($dialogId): self
	{
		$this->dialogId = $dialogId;
		return $this;
	}


	/**
	 * @param bool|null $triggerCooldown
	 *
	 * @return self
	 */
	public function setTriggerCooldown($triggerCooldown): self
	{
		$this->triggerCooldown = $triggerCooldown;
		return $this;
	}
}
