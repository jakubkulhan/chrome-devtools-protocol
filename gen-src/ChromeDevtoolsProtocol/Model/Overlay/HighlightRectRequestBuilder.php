<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightRectRequestBuilder
{
	private $x;
	private $y;
	private $width;
	private $height;
	private $color;
	private $outlineColor;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): HighlightRectRequest
	{
		$instance = new HighlightRectRequest();
		if ($this->x === null) {
			throw new BuilderException('Property [x] is required.');
		}
		$instance->x = $this->x;
		if ($this->y === null) {
			throw new BuilderException('Property [y] is required.');
		}
		$instance->y = $this->y;
		if ($this->width === null) {
			throw new BuilderException('Property [width] is required.');
		}
		$instance->width = $this->width;
		if ($this->height === null) {
			throw new BuilderException('Property [height] is required.');
		}
		$instance->height = $this->height;
		$instance->color = $this->color;
		$instance->outlineColor = $this->outlineColor;
		return $instance;
	}


	/**
	 * @param int $x
	 *
	 * @return self
	 */
	public function setX($x): self
	{
		$this->x = $x;
		return $this;
	}


	/**
	 * @param int $y
	 *
	 * @return self
	 */
	public function setY($y): self
	{
		$this->y = $y;
		return $this;
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


	/**
	 * @param RGBA|null $color
	 *
	 * @return self
	 */
	public function setColor($color): self
	{
		$this->color = $color;
		return $this;
	}


	/**
	 * @param RGBA|null $outlineColor
	 *
	 * @return self
	 */
	public function setOutlineColor($outlineColor): self
	{
		$this->outlineColor = $outlineColor;
		return $this;
	}
}
