<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReloadRequestBuilder
{
	private $ignoreCache;

	private $scriptToEvaluateOnLoad;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReloadRequest
	{
		$instance = new ReloadRequest();
		$instance->ignoreCache = $this->ignoreCache;
		$instance->scriptToEvaluateOnLoad = $this->scriptToEvaluateOnLoad;
		return $instance;
	}


	/**
	 * @param bool|null $ignoreCache
	 *
	 * @return self
	 */
	public function setIgnoreCache($ignoreCache): self
	{
		$this->ignoreCache = $ignoreCache;
		return $this;
	}


	/**
	 * @param string|null $scriptToEvaluateOnLoad
	 *
	 * @return self
	 */
	public function setScriptToEvaluateOnLoad($scriptToEvaluateOnLoad): self
	{
		$this->scriptToEvaluateOnLoad = $scriptToEvaluateOnLoad;
		return $this;
	}
}
