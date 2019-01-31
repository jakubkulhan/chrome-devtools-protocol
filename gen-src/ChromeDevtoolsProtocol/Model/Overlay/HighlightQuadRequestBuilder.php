<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightQuadRequestBuilder
{
	private $quad;

	private $color;

	private $outlineColor;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): HighlightQuadRequest
	{
		$instance = new HighlightQuadRequest();
		if ($this->quad === null) {
			throw new BuilderException('Property [quad] is required.');
		}
		$instance->quad = $this->quad;
		$instance->color = $this->color;
		$instance->outlineColor = $this->outlineColor;
		return $instance;
	}


	/**
	 * @param int[]|float[] $quad
	 *
	 * @return self
	 */
	public function setQuad($quad): self
	{
		$this->quad = $quad;
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
