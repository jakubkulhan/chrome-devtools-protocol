<?php
namespace ChromeDevtoolsProtocol\Model\IO;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CloseRequestBuilder
{
	private $handle;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CloseRequest
	{
		$instance = new CloseRequest();
		if ($this->handle === null) {
			throw new BuilderException('Property [handle] is required.');
		}
		$instance->handle = $this->handle;
		return $instance;
	}


	/**
	 * @param string $handle
	 *
	 * @return self
	 */
	public function setHandle($handle): self
	{
		$this->handle = $handle;
		return $this;
	}
}
