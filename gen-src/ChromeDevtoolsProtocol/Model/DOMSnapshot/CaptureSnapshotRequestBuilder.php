<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CaptureSnapshotRequestBuilder
{
	private $computedStyles;

	private $includeDOMRects;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CaptureSnapshotRequest
	{
		$instance = new CaptureSnapshotRequest();
		if ($this->computedStyles === null) {
			throw new BuilderException('Property [computedStyles] is required.');
		}
		$instance->computedStyles = $this->computedStyles;
		$instance->includeDOMRects = $this->includeDOMRects;
		return $instance;
	}


	/**
	 * @param string[] $computedStyles
	 *
	 * @return self
	 */
	public function setComputedStyles($computedStyles): self
	{
		$this->computedStyles = $computedStyles;
		return $this;
	}


	/**
	 * @param bool|null $includeDOMRects
	 *
	 * @return self
	 */
	public function setIncludeDOMRects($includeDOMRects): self
	{
		$this->includeDOMRects = $includeDOMRects;
		return $this;
	}
}
