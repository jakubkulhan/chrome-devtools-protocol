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


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CreateBrowserContextRequest
	{
		$instance = new CreateBrowserContextRequest();
		$instance->disposeOnDetach = $this->disposeOnDetach;
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
}
