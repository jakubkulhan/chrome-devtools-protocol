<?php
namespace ChromeDevtoolsProtocol\Model\LayerTree;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SnapshotCommandLogRequestBuilder
{
	private $snapshotId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SnapshotCommandLogRequest
	{
		$instance = new SnapshotCommandLogRequest();
		if ($this->snapshotId === null) {
			throw new BuilderException('Property [snapshotId] is required.');
		}
		$instance->snapshotId = $this->snapshotId;
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
}
