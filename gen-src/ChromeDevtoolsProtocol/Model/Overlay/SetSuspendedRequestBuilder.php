<?php
namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSuspendedRequestBuilder
{
	private $suspended;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetSuspendedRequest
	{
		$instance = new SetSuspendedRequest();
		if ($this->suspended === null) {
			throw new BuilderException('Property [suspended] is required.');
		}
		$instance->suspended = $this->suspended;
		return $instance;
	}


	/**
	 * @param bool $suspended
	 *
	 * @return self
	 */
	public function setSuspended($suspended): self
	{
		$this->suspended = $suspended;
		return $this;
	}
}
