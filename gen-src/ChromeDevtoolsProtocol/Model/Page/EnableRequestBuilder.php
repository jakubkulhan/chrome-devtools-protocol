<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $enableFileChooserOpenedEvent;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		$instance->enableFileChooserOpenedEvent = $this->enableFileChooserOpenedEvent;
		return $instance;
	}


	/**
	 * @param bool|null $enableFileChooserOpenedEvent
	 *
	 * @return self
	 */
	public function setEnableFileChooserOpenedEvent($enableFileChooserOpenedEvent): self
	{
		$this->enableFileChooserOpenedEvent = $enableFileChooserOpenedEvent;
		return $this;
	}
}
