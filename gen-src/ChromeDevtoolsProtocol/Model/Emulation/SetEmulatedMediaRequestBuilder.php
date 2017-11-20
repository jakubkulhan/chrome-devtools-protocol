<?php
namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEmulatedMediaRequestBuilder
{
	private $media;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetEmulatedMediaRequest
	{
		$instance = new SetEmulatedMediaRequest();
		if ($this->media === null) {
			throw new BuilderException('Property [media] is required.');
		}
		$instance->media = $this->media;
		return $instance;
	}


	/**
	 * @param string $media
	 *
	 * @return self
	 */
	public function setMedia($media): self
	{
		$this->media = $media;
		return $this;
	}
}
