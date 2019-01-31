<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetForceUpdateOnPageLoadRequestBuilder
{
	private $forceUpdateOnPageLoad;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetForceUpdateOnPageLoadRequest
	{
		$instance = new SetForceUpdateOnPageLoadRequest();
		if ($this->forceUpdateOnPageLoad === null) {
			throw new BuilderException('Property [forceUpdateOnPageLoad] is required.');
		}
		$instance->forceUpdateOnPageLoad = $this->forceUpdateOnPageLoad;
		return $instance;
	}


	/**
	 * @param bool $forceUpdateOnPageLoad
	 *
	 * @return self
	 */
	public function setForceUpdateOnPageLoad($forceUpdateOnPageLoad): self
	{
		$this->forceUpdateOnPageLoad = $forceUpdateOnPageLoad;
		return $this;
	}
}
