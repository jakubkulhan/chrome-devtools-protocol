<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSkipAllPausesRequestBuilder
{
	private $skip;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetSkipAllPausesRequest
	{
		$instance = new SetSkipAllPausesRequest();
		if ($this->skip === null) {
			throw new BuilderException('Property [skip] is required.');
		}
		$instance->skip = $this->skip;
		return $instance;
	}


	/**
	 * @param bool $skip
	 *
	 * @return self
	 */
	public function setSkip($skip): self
	{
		$this->skip = $skip;
		return $this;
	}
}
