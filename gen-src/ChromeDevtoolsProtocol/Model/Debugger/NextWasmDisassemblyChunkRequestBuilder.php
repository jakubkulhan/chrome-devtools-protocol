<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NextWasmDisassemblyChunkRequestBuilder
{
	private $streamId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): NextWasmDisassemblyChunkRequest
	{
		$instance = new NextWasmDisassemblyChunkRequest();
		if ($this->streamId === null) {
			throw new BuilderException('Property [streamId] is required.');
		}
		$instance->streamId = $this->streamId;
		return $instance;
	}


	/**
	 * @param string $streamId
	 *
	 * @return self
	 */
	public function setStreamId($streamId): self
	{
		$this->streamId = $streamId;
		return $this;
	}
}
