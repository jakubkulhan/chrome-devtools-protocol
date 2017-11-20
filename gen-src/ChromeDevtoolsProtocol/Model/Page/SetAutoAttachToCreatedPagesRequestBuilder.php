<?php
namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAutoAttachToCreatedPagesRequestBuilder
{
	private $autoAttach;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAutoAttachToCreatedPagesRequest
	{
		$instance = new SetAutoAttachToCreatedPagesRequest();
		if ($this->autoAttach === null) {
			throw new BuilderException('Property [autoAttach] is required.');
		}
		$instance->autoAttach = $this->autoAttach;
		return $instance;
	}


	/**
	 * @param bool $autoAttach
	 *
	 * @return self
	 */
	public function setAutoAttach($autoAttach): self
	{
		$this->autoAttach = $autoAttach;
		return $this;
	}
}
