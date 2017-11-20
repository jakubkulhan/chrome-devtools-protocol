<?php
namespace ChromeDevtoolsProtocol\Model\Memory;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPressureNotificationsSuppressedRequestBuilder
{
	private $suppressed;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPressureNotificationsSuppressedRequest
	{
		$instance = new SetPressureNotificationsSuppressedRequest();
		if ($this->suppressed === null) {
			throw new BuilderException('Property [suppressed] is required.');
		}
		$instance->suppressed = $this->suppressed;
		return $instance;
	}


	/**
	 * @param bool $suppressed
	 *
	 * @return self
	 */
	public function setSuppressed($suppressed): self
	{
		$this->suppressed = $suppressed;
		return $this;
	}
}
