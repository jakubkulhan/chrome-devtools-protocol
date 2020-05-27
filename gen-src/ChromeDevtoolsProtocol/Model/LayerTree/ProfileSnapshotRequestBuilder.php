<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ProfileSnapshotRequestBuilder
{
	private $snapshotId;
	private $minRepeatCount;
	private $minDuration;
	private $clipRect;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ProfileSnapshotRequest
	{
		$instance = new ProfileSnapshotRequest();
		if ($this->snapshotId === null) {
			throw new BuilderException('Property [snapshotId] is required.');
		}
		$instance->snapshotId = $this->snapshotId;
		$instance->minRepeatCount = $this->minRepeatCount;
		$instance->minDuration = $this->minDuration;
		$instance->clipRect = $this->clipRect;
		return $instance;
	}


	/**
	 * @param string $snapshotId
	 *
	 * @return self
	 */
	public function setSnapshotId($snapshotId): self
	{
		$this->snapshotId = $snapshotId;
		return $this;
	}


	/**
	 * @param int|null $minRepeatCount
	 *
	 * @return self
	 */
	public function setMinRepeatCount($minRepeatCount): self
	{
		$this->minRepeatCount = $minRepeatCount;
		return $this;
	}


	/**
	 * @param int|float|null $minDuration
	 *
	 * @return self
	 */
	public function setMinDuration($minDuration): self
	{
		$this->minDuration = $minDuration;
		return $this;
	}


	/**
	 * @param Rect|null $clipRect
	 *
	 * @return self
	 */
	public function setClipRect($clipRect): self
	{
		$this->clipRect = $clipRect;
		return $this;
	}
}
