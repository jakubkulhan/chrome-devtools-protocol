<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBlackboxedRangesRequestBuilder
{
	private $scriptId;
	private $positions;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBlackboxedRangesRequest
	{
		$instance = new SetBlackboxedRangesRequest();
		if ($this->scriptId === null) {
			throw new BuilderException('Property [scriptId] is required.');
		}
		$instance->scriptId = $this->scriptId;
		if ($this->positions === null) {
			throw new BuilderException('Property [positions] is required.');
		}
		$instance->positions = $this->positions;
		return $instance;
	}


	/**
	 * @param string $scriptId
	 *
	 * @return self
	 */
	public function setScriptId($scriptId): self
	{
		$this->scriptId = $scriptId;
		return $this;
	}


	/**
	 * @param ScriptPosition[] $positions
	 *
	 * @return self
	 */
	public function setPositions($positions): self
	{
		$this->positions = $positions;
		return $this;
	}
}
