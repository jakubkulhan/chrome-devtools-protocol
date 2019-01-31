<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CaptureSnapshotRequestBuilder
{
	private $format;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CaptureSnapshotRequest
	{
		$instance = new CaptureSnapshotRequest();
		$instance->format = $this->format;
		return $instance;
	}


	/**
	 * @param string|null $format
	 *
	 * @return self
	 */
	public function setFormat($format): self
	{
		$this->format = $format;
		return $this;
	}
}
