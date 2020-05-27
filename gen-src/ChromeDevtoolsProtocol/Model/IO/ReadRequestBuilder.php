<?php

namespace ChromeDevtoolsProtocol\Model\IO;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReadRequestBuilder
{
	private $handle;
	private $offset;
	private $size;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReadRequest
	{
		$instance = new ReadRequest();
		if ($this->handle === null) {
			throw new BuilderException('Property [handle] is required.');
		}
		$instance->handle = $this->handle;
		$instance->offset = $this->offset;
		$instance->size = $this->size;
		return $instance;
	}


	/**
	 * @param string $handle
	 *
	 * @return self
	 */
	public function setHandle($handle): self
	{
		$this->handle = $handle;
		return $this;
	}


	/**
	 * @param int|null $offset
	 *
	 * @return self
	 */
	public function setOffset($offset): self
	{
		$this->offset = $offset;
		return $this;
	}


	/**
	 * @param int|null $size
	 *
	 * @return self
	 */
	public function setSize($size): self
	{
		$this->size = $size;
		return $this;
	}
}
