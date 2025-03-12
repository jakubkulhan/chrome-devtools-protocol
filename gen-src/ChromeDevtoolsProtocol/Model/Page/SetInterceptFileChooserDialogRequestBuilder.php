<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInterceptFileChooserDialogRequestBuilder
{
	private $enabled;
	private $cancel;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetInterceptFileChooserDialogRequest
	{
		$instance = new SetInterceptFileChooserDialogRequest();
		if ($this->enabled === null) {
			throw new BuilderException('Property [enabled] is required.');
		}
		$instance->enabled = $this->enabled;
		$instance->cancel = $this->cancel;
		return $instance;
	}


	/**
	 * @param bool $enabled
	 *
	 * @return self
	 */
	public function setEnabled($enabled): self
	{
		$this->enabled = $enabled;
		return $this;
	}


	/**
	 * @param bool|null $cancel
	 *
	 * @return self
	 */
	public function setCancel($cancel): self
	{
		$this->cancel = $cancel;
		return $this;
	}
}
