<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBypassServiceWorkerRequestBuilder
{
	private $bypass;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBypassServiceWorkerRequest
	{
		$instance = new SetBypassServiceWorkerRequest();
		if ($this->bypass === null) {
			throw new BuilderException('Property [bypass] is required.');
		}
		$instance->bypass = $this->bypass;
		return $instance;
	}


	/**
	 * @param bool $bypass
	 *
	 * @return self
	 */
	public function setBypass($bypass): self
	{
		$this->bypass = $bypass;
		return $this;
	}
}
