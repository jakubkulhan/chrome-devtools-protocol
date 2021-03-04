<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CancelDownloadRequestBuilder
{
	private $guid;
	private $browserContextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CancelDownloadRequest
	{
		$instance = new CancelDownloadRequest();
		if ($this->guid === null) {
			throw new BuilderException('Property [guid] is required.');
		}
		$instance->guid = $this->guid;
		$instance->browserContextId = $this->browserContextId;
		return $instance;
	}


	/**
	 * @param string $guid
	 *
	 * @return self
	 */
	public function setGuid($guid): self
	{
		$this->guid = $guid;
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
