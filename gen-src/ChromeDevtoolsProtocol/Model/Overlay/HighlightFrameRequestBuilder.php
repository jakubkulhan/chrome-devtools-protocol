<?php
namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightFrameRequestBuilder
{
	private $frameId;

	private $contentColor;

	private $contentOutlineColor;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): HighlightFrameRequest
	{
		$instance = new HighlightFrameRequest();
		if ($this->frameId === null) {
			throw new BuilderException('Property [frameId] is required.');
		}
		$instance->frameId = $this->frameId;
		$instance->contentColor = $this->contentColor;
		$instance->contentOutlineColor = $this->contentOutlineColor;
		return $instance;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}


	/**
	 * @param RGBA|null $contentColor
	 *
	 * @return self
	 */
	public function setContentColor($contentColor): self
	{
		$this->contentColor = $contentColor;
		return $this;
	}


	/**
	 * @param RGBA|null $contentOutlineColor
	 *
	 * @return self
	 */
	public function setContentOutlineColor($contentOutlineColor): self
	{
		$this->contentOutlineColor = $contentOutlineColor;
		return $this;
	}
}
