<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetScriptSourceRequestBuilder
{
	private $scriptId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetScriptSourceRequest
	{
		$instance = new GetScriptSourceRequest();
		if ($this->scriptId === null) {
			throw new BuilderException('Property [scriptId] is required.');
		}
		$instance->scriptId = $this->scriptId;
		return $instance;
	}


	/**
	 * @param string $scriptId
	 *
	 * @return self
	 */
	public function setScriptId($scriptId): self
	{
		$this->scriptId = $scriptId;
		return $this;
	}
}
