<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClickDialogButtonRequestBuilder
{
	private $dialogId;
	private $dialogButton;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ClickDialogButtonRequest
	{
		$instance = new ClickDialogButtonRequest();
		if ($this->dialogId === null) {
			throw new BuilderException('Property [dialogId] is required.');
		}
		$instance->dialogId = $this->dialogId;
		if ($this->dialogButton === null) {
			throw new BuilderException('Property [dialogButton] is required.');
		}
		$instance->dialogButton = $this->dialogButton;
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
	 * @param string $dialogButton
	 *
	 * @return self
	 */
	public function setDialogButton($dialogButton): self
	{
		$this->dialogButton = $dialogButton;
		return $this;
	}
}
