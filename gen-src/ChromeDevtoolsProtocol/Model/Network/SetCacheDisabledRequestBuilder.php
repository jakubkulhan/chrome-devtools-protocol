<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCacheDisabledRequestBuilder
{
	private $cacheDisabled;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetCacheDisabledRequest
	{
		$instance = new SetCacheDisabledRequest();
		if ($this->cacheDisabled === null) {
			throw new BuilderException('Property [cacheDisabled] is required.');
		}
		$instance->cacheDisabled = $this->cacheDisabled;
		return $instance;
	}


	/**
	 * @param bool $cacheDisabled
	 *
	 * @return self
	 */
	public function setCacheDisabled($cacheDisabled): self
	{
		$this->cacheDisabled = $cacheDisabled;
		return $this;
	}
}
