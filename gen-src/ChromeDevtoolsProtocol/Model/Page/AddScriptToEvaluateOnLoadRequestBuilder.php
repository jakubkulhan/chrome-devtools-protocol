<?php
namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddScriptToEvaluateOnLoadRequestBuilder
{
	private $scriptSource;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddScriptToEvaluateOnLoadRequest
	{
		$instance = new AddScriptToEvaluateOnLoadRequest();
		if ($this->scriptSource === null) {
			throw new BuilderException('Property [scriptSource] is required.');
		}
		$instance->scriptSource = $this->scriptSource;
		return $instance;
	}


	/**
	 * @param string $scriptSource
	 *
	 * @return self
	 */
	public function setScriptSource($scriptSource): self
	{
		$this->scriptSource = $scriptSource;
		return $this;
	}
}
