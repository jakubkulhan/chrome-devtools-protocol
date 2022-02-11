<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateBrowserContextRequestBuilder
{
	private $disposeOnDetach;
	private $proxyServer;
	private $proxyBypassList;
	private $originsWithUniversalNetworkAccess;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CreateBrowserContextRequest
	{
		$instance = new CreateBrowserContextRequest();
		$instance->disposeOnDetach = $this->disposeOnDetach;
		$instance->proxyServer = $this->proxyServer;
		$instance->proxyBypassList = $this->proxyBypassList;
		$instance->originsWithUniversalNetworkAccess = $this->originsWithUniversalNetworkAccess;
		return $instance;
	}


	/**
	 * @param bool|null $disposeOnDetach
	 *
	 * @return self
	 */
	public function setDisposeOnDetach($disposeOnDetach): self
	{
		$this->disposeOnDetach = $disposeOnDetach;
		return $this;
	}


	/**
	 * @param string|null $proxyServer
	 *
	 * @return self
	 */
	public function setProxyServer($proxyServer): self
	{
		$this->proxyServer = $proxyServer;
		return $this;
	}


	/**
	 * @param string|null $proxyBypassList
	 *
	 * @return self
	 */
	public function setProxyBypassList($proxyBypassList): self
	{
		$this->proxyBypassList = $proxyBypassList;
		return $this;
	}


	/**
	 * @param string[]|null $originsWithUniversalNetworkAccess
	 *
	 * @return self
	 */
	public function setOriginsWithUniversalNetworkAccess($originsWithUniversalNetworkAccess): self
	{
		$this->originsWithUniversalNetworkAccess = $originsWithUniversalNetworkAccess;
		return $this;
	}
}
