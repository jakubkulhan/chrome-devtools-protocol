<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDataSaverOverrideRequestBuilder
{
	private $dataSaverEnabled;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDataSaverOverrideRequest
	{
		$instance = new SetDataSaverOverrideRequest();
		$instance->dataSaverEnabled = $this->dataSaverEnabled;
		return $instance;
	}


	/**
	 * @param bool|null $dataSaverEnabled
	 *
	 * @return self
	 */
	public function setDataSaverEnabled($dataSaverEnabled): self
	{
		$this->dataSaverEnabled = $dataSaverEnabled;
		return $this;
	}
}
