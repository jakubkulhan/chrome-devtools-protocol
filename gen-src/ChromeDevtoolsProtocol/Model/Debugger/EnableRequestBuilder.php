<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $maxScriptsCacheSize;

	private $supportsWasmDwarf;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		$instance->maxScriptsCacheSize = $this->maxScriptsCacheSize;
		$instance->supportsWasmDwarf = $this->supportsWasmDwarf;
		return $instance;
	}


	/**
	 * @param int|float|null $maxScriptsCacheSize
	 *
	 * @return self
	 */
	public function setMaxScriptsCacheSize($maxScriptsCacheSize): self
	{
		$this->maxScriptsCacheSize = $maxScriptsCacheSize;
		return $this;
	}


	/**
	 * @param bool|null $supportsWasmDwarf
	 *
	 * @return self
	 */
	public function setSupportsWasmDwarf($supportsWasmDwarf): self
	{
		$this->supportsWasmDwarf = $supportsWasmDwarf;
		return $this;
	}
}
