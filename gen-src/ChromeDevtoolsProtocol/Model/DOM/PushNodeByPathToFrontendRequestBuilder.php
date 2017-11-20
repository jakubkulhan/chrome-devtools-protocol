<?php
namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PushNodeByPathToFrontendRequestBuilder
{
	private $path;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): PushNodeByPathToFrontendRequest
	{
		$instance = new PushNodeByPathToFrontendRequest();
		if ($this->path === null) {
			throw new BuilderException('Property [path] is required.');
		}
		$instance->path = $this->path;
		return $instance;
	}


	/**
	 * @param string $path
	 *
	 * @return self
	 */
	public function setPath($path): self
	{
		$this->path = $path;
		return $this;
	}
}
