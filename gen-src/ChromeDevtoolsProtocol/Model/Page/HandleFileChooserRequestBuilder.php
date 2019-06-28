<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HandleFileChooserRequestBuilder
{
	private $action;

	private $files;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): HandleFileChooserRequest
	{
		$instance = new HandleFileChooserRequest();
		if ($this->action === null) {
			throw new BuilderException('Property [action] is required.');
		}
		$instance->action = $this->action;
		$instance->files = $this->files;
		return $instance;
	}


	/**
	 * @param string $action
	 *
	 * @return self
	 */
	public function setAction($action): self
	{
		$this->action = $action;
		return $this;
	}


	/**
	 * @param string[]|null $files
	 *
	 * @return self
	 */
	public function setFiles($files): self
	{
		$this->files = $files;
		return $this;
	}
}
