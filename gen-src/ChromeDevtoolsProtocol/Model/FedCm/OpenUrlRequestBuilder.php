<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OpenUrlRequestBuilder
{
	private $dialogId;
	private $accountIndex;
	private $accountUrlType;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): OpenUrlRequest
	{
		$instance = new OpenUrlRequest();
		if ($this->dialogId === null) {
			throw new BuilderException('Property [dialogId] is required.');
		}
		$instance->dialogId = $this->dialogId;
		if ($this->accountIndex === null) {
			throw new BuilderException('Property [accountIndex] is required.');
		}
		$instance->accountIndex = $this->accountIndex;
		if ($this->accountUrlType === null) {
			throw new BuilderException('Property [accountUrlType] is required.');
		}
		$instance->accountUrlType = $this->accountUrlType;
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


	/**
	 * @param string $accountUrlType
	 *
	 * @return self
	 */
	public function setAccountUrlType($accountUrlType): self
	{
		$this->accountUrlType = $accountUrlType;
		return $this;
	}
}
