<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TriggerActionRequestBuilder
{
	private $id;
	private $targetId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): TriggerActionRequest
	{
		$instance = new TriggerActionRequest();
		if ($this->id === null) {
			throw new BuilderException('Property [id] is required.');
		}
		$instance->id = $this->id;
		if ($this->targetId === null) {
			throw new BuilderException('Property [targetId] is required.');
		}
		$instance->targetId = $this->targetId;
		return $instance;
	}


	/**
	 * @param string $id
	 *
	 * @return self
	 */
	public function setId($id): self
	{
		$this->id = $id;
		return $this;
	}


	/**
	 * @param string $targetId
	 *
	 * @return self
	 */
	public function setTargetId($targetId): self
	{
		$this->targetId = $targetId;
		return $this;
	}
}
