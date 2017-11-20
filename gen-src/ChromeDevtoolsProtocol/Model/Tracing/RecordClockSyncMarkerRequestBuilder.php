<?php
namespace ChromeDevtoolsProtocol\Model\Tracing;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RecordClockSyncMarkerRequestBuilder
{
	private $syncId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RecordClockSyncMarkerRequest
	{
		$instance = new RecordClockSyncMarkerRequest();
		if ($this->syncId === null) {
			throw new BuilderException('Property [syncId] is required.');
		}
		$instance->syncId = $this->syncId;
		return $instance;
	}


	/**
	 * @param string $syncId
	 *
	 * @return self
	 */
	public function setSyncId($syncId): self
	{
		$this->syncId = $syncId;
		return $this;
	}
}
