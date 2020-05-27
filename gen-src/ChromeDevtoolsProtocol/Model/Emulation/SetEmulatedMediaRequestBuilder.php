<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEmulatedMediaRequestBuilder
{
	private $media;
	private $features;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetEmulatedMediaRequest
	{
		$instance = new SetEmulatedMediaRequest();
		$instance->media = $this->media;
		$instance->features = $this->features;
		return $instance;
	}


	/**
	 * @param string|null $media
	 *
	 * @return self
	 */
	public function setMedia($media): self
	{
		$this->media = $media;
		return $this;
	}


	/**
	 * @param MediaFeature[]|null $features
	 *
	 * @return self
	 */
	public function setFeatures($features): self
	{
		$this->features = $features;
		return $this;
	}
}
