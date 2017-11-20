<?php
namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVisibleSizeRequestBuilder
{
	private $width;

	private $height;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetVisibleSizeRequest
	{
		$instance = new SetVisibleSizeRequest();
		if ($this->width === null) {
			throw new BuilderException('Property [width] is required.');
		}
		$instance->width = $this->width;
		if ($this->height === null) {
			throw new BuilderException('Property [height] is required.');
		}
		$instance->height = $this->height;
		return $instance;
	}


	/**
	 * @param int $width
	 *
	 * @return self
	 */
	public function setWidth($width): self
	{
		$this->width = $width;
		return $this;
	}


	/**
	 * @param int $height
	 *
	 * @return self
	 */
	public function setHeight($height): self
	{
		$this->height = $height;
		return $this;
	}
}
