<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDownloadBehaviorRequestBuilder
{
	private $behavior;
	private $browserContextId;
	private $downloadPath;
	private $eventsEnabled;


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
		$instance->browserContextId = $this->browserContextId;
		$instance->downloadPath = $this->downloadPath;
		$instance->eventsEnabled = $this->eventsEnabled;
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
	 * @param string $browserContextId
	 *
	 * @return self
	 */
	public function setBrowserContextId($browserContextId): self
	{
		$this->browserContextId = $browserContextId;
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


	/**
	 * @param bool|null $eventsEnabled
	 *
	 * @return self
	 */
	public function setEventsEnabled($eventsEnabled): self
	{
		$this->eventsEnabled = $eventsEnabled;
		return $this;
	}
}
