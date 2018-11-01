<?php
namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $patterns;

	private $handleAuthRequests;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		$instance->patterns = $this->patterns;
		$instance->handleAuthRequests = $this->handleAuthRequests;
		return $instance;
	}


	/**
	 * @param RequestPattern[]|null $patterns
	 *
	 * @return self
	 */
	public function setPatterns($patterns): self
	{
		$this->patterns = $patterns;
		return $this;
	}


	/**
	 * @param bool|null $handleAuthRequests
	 *
	 * @return self
	 */
	public function setHandleAuthRequests($handleAuthRequests): self
	{
		$this->handleAuthRequests = $handleAuthRequests;
		return $this;
	}
}
