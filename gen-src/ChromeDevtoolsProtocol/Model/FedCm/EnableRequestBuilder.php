<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $disableRejectionDelay;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		$instance->disableRejectionDelay = $this->disableRejectionDelay;
		return $instance;
	}


	/**
	 * @param bool|null $disableRejectionDelay
	 *
	 * @return self
	 */
	public function setDisableRejectionDelay($disableRejectionDelay): self
	{
		$this->disableRejectionDelay = $disableRejectionDelay;
		return $this;
	}
}
