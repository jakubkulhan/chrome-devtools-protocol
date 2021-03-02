<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ProduceCompilationCacheRequestBuilder
{
	private $scripts;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ProduceCompilationCacheRequest
	{
		$instance = new ProduceCompilationCacheRequest();
		if ($this->scripts === null) {
			throw new BuilderException('Property [scripts] is required.');
		}
		$instance->scripts = $this->scripts;
		return $instance;
	}


	/**
	 * @param CompilationCacheParams[] $scripts
	 *
	 * @return self
	 */
	public function setScripts($scripts): self
	{
		$this->scripts = $scripts;
		return $this;
	}
}
