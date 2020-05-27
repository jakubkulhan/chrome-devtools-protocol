<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReplaySnapshotRequestBuilder
{
	private $snapshotId;
	private $fromStep;
	private $toStep;
	private $scale;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReplaySnapshotRequest
	{
		$instance = new ReplaySnapshotRequest();
		if ($this->snapshotId === null) {
			throw new BuilderException('Property [snapshotId] is required.');
		}
		$instance->snapshotId = $this->snapshotId;
		$instance->fromStep = $this->fromStep;
		$instance->toStep = $this->toStep;
		$instance->scale = $this->scale;
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
	 * @param int|null $fromStep
	 *
	 * @return self
	 */
	public function setFromStep($fromStep): self
	{
		$this->fromStep = $fromStep;
		return $this;
	}


	/**
	 * @param int|null $toStep
	 *
	 * @return self
	 */
	public function setToStep($toStep): self
	{
		$this->toStep = $toStep;
		return $this;
	}


	/**
	 * @param int|float|null $scale
	 *
	 * @return self
	 */
	public function setScale($scale): self
	{
		$this->scale = $scale;
		return $this;
	}
}
