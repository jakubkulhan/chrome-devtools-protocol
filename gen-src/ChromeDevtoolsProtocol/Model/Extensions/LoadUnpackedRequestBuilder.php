<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadUnpackedRequestBuilder
{
	private $path;
	private $enableInIncognito;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): LoadUnpackedRequest
	{
		$instance = new LoadUnpackedRequest();
		if ($this->path === null) {
			throw new BuilderException('Property [path] is required.');
		}
		$instance->path = $this->path;
		$instance->enableInIncognito = $this->enableInIncognito;
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


	/**
	 * @param bool|null $enableInIncognito
	 *
	 * @return self
	 */
	public function setEnableInIncognito($enableInIncognito): self
	{
		$this->enableInIncognito = $enableInIncognito;
		return $this;
	}
}
