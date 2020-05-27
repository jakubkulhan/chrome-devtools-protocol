<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HandleJavaScriptDialogRequestBuilder
{
	private $accept;
	private $promptText;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): HandleJavaScriptDialogRequest
	{
		$instance = new HandleJavaScriptDialogRequest();
		if ($this->accept === null) {
			throw new BuilderException('Property [accept] is required.');
		}
		$instance->accept = $this->accept;
		$instance->promptText = $this->promptText;
		return $instance;
	}


	/**
	 * @param bool $accept
	 *
	 * @return self
	 */
	public function setAccept($accept): self
	{
		$this->accept = $accept;
		return $this;
	}


	/**
	 * @param string|null $promptText
	 *
	 * @return self
	 */
	public function setPromptText($promptText): self
	{
		$this->promptText = $promptText;
		return $this;
	}
}
