<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SelectAccountRequestBuilder
{
	private $dialogId;
	private $accountIndex;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SelectAccountRequest
	{
		$instance = new SelectAccountRequest();
		if ($this->dialogId === null) {
			throw new BuilderException('Property [dialogId] is required.');
		}
		$instance->dialogId = $this->dialogId;
		if ($this->accountIndex === null) {
			throw new BuilderException('Property [accountIndex] is required.');
		}
		$instance->accountIndex = $this->accountIndex;
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
	 * @param int $accountIndex
	 *
	 * @return self
	 */
	public function setAccountIndex($accountIndex): self
	{
		$this->accountIndex = $accountIndex;
		return $this;
	}
}
