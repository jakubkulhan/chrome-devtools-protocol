<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ChangeAppUserSettingsRequestBuilder
{
	private $manifestId;
	private $linkCapturing;
	private $displayMode;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ChangeAppUserSettingsRequest
	{
		$instance = new ChangeAppUserSettingsRequest();
		if ($this->manifestId === null) {
			throw new BuilderException('Property [manifestId] is required.');
		}
		$instance->manifestId = $this->manifestId;
		$instance->linkCapturing = $this->linkCapturing;
		$instance->displayMode = $this->displayMode;
		return $instance;
	}


	/**
	 * @param string $manifestId
	 *
	 * @return self
	 */
	public function setManifestId($manifestId): self
	{
		$this->manifestId = $manifestId;
		return $this;
	}


	/**
	 * @param bool|null $linkCapturing
	 *
	 * @return self
	 */
	public function setLinkCapturing($linkCapturing): self
	{
		$this->linkCapturing = $linkCapturing;
		return $this;
	}


	/**
	 * @param string $displayMode
	 *
	 * @return self
	 */
	public function setDisplayMode($displayMode): self
	{
		$this->displayMode = $displayMode;
		return $this;
	}
}
