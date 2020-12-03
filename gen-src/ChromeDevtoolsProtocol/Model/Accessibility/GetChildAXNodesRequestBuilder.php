<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetChildAXNodesRequestBuilder
{
	private $id;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetChildAXNodesRequest
	{
		$instance = new GetChildAXNodesRequest();
		if ($this->id === null) {
			throw new BuilderException('Property [id] is required.');
		}
		$instance->id = $this->id;
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
}
