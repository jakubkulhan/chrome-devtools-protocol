<?php
namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetScrollbarsHiddenRequestBuilder
{
	private $hidden;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetScrollbarsHiddenRequest
	{
		$instance = new SetScrollbarsHiddenRequest();
		if ($this->hidden === null) {
			throw new BuilderException('Property [hidden] is required.');
		}
		$instance->hidden = $this->hidden;
		return $instance;
	}


	/**
	 * @param bool $hidden
	 *
	 * @return self
	 */
	public function setHidden($hidden): self
	{
		$this->hidden = $hidden;
		return $this;
	}
}
