<?php

namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetEventListenersRequestBuilder
{
	private $objectId;

	private $depth;

	private $pierce;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetEventListenersRequest
	{
		$instance = new GetEventListenersRequest();
		if ($this->objectId === null) {
			throw new BuilderException('Property [objectId] is required.');
		}
		$instance->objectId = $this->objectId;
		$instance->depth = $this->depth;
		$instance->pierce = $this->pierce;
		return $instance;
	}


	/**
	 * @param string $objectId
	 *
	 * @return self
	 */
	public function setObjectId($objectId): self
	{
		$this->objectId = $objectId;
		return $this;
	}


	/**
	 * @param int|null $depth
	 *
	 * @return self
	 */
	public function setDepth($depth): self
	{
		$this->depth = $depth;
		return $this;
	}


	/**
	 * @param bool|null $pierce
	 *
	 * @return self
	 */
	public function setPierce($pierce): self
	{
		$this->pierce = $pierce;
		return $this;
	}
}
