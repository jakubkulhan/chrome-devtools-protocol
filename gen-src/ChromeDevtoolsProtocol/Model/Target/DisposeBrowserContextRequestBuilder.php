<?php

namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DisposeBrowserContextRequestBuilder
{
	private $browserContextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DisposeBrowserContextRequest
	{
		$instance = new DisposeBrowserContextRequest();
		if ($this->browserContextId === null) {
			throw new BuilderException('Property [browserContextId] is required.');
		}
		$instance->browserContextId = $this->browserContextId;
		return $instance;
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
