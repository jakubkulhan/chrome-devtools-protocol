<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDownloadBehaviorRequestBuilder
{
	private $behavior;

	private $downloadPath;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDownloadBehaviorRequest
	{
		$instance = new SetDownloadBehaviorRequest();
		if ($this->behavior === null) {
			throw new BuilderException('Property [behavior] is required.');
		}
		$instance->behavior = $this->behavior;
		$instance->downloadPath = $this->downloadPath;
		return $instance;
	}


	/**
	 * @param string $behavior
	 *
	 * @return self
	 */
	public function setBehavior($behavior): self
	{
		$this->behavior = $behavior;
		return $this;
	}


	/**
	 * @param string|null $downloadPath
	 *
	 * @return self
	 */
	public function setDownloadPath($downloadPath): self
	{
		$this->downloadPath = $downloadPath;
		return $this;
	}
}
