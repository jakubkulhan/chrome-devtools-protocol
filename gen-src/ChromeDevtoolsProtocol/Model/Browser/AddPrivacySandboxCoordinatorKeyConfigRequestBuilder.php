<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddPrivacySandboxCoordinatorKeyConfigRequestBuilder
{
	private $api;
	private $coordinatorOrigin;
	private $keyConfig;
	private $browserContextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddPrivacySandboxCoordinatorKeyConfigRequest
	{
		$instance = new AddPrivacySandboxCoordinatorKeyConfigRequest();
		if ($this->api === null) {
			throw new BuilderException('Property [api] is required.');
		}
		$instance->api = $this->api;
		if ($this->coordinatorOrigin === null) {
			throw new BuilderException('Property [coordinatorOrigin] is required.');
		}
		$instance->coordinatorOrigin = $this->coordinatorOrigin;
		if ($this->keyConfig === null) {
			throw new BuilderException('Property [keyConfig] is required.');
		}
		$instance->keyConfig = $this->keyConfig;
		$instance->browserContextId = $this->browserContextId;
		return $instance;
	}


	/**
	 * @param string $api
	 *
	 * @return self
	 */
	public function setApi($api): self
	{
		$this->api = $api;
		return $this;
	}


	/**
	 * @param string $coordinatorOrigin
	 *
	 * @return self
	 */
	public function setCoordinatorOrigin($coordinatorOrigin): self
	{
		$this->coordinatorOrigin = $coordinatorOrigin;
		return $this;
	}


	/**
	 * @param string $keyConfig
	 *
	 * @return self
	 */
	public function setKeyConfig($keyConfig): self
	{
		$this->keyConfig = $keyConfig;
		return $this;
	}


	/**
	 * @param string $browserContextId
	 *
	 * @return self
	 */
	public function setBrowserContextId($browserContextId): self
	{
		$this->browserContextId = $browserContextId;
		return $this;
	}
}
