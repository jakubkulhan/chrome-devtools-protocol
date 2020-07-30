<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetIdleOverrideRequestBuilder
{
	private $isUserActive;
	private $isScreenUnlocked;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetIdleOverrideRequest
	{
		$instance = new SetIdleOverrideRequest();
		if ($this->isUserActive === null) {
			throw new BuilderException('Property [isUserActive] is required.');
		}
		$instance->isUserActive = $this->isUserActive;
		if ($this->isScreenUnlocked === null) {
			throw new BuilderException('Property [isScreenUnlocked] is required.');
		}
		$instance->isScreenUnlocked = $this->isScreenUnlocked;
		return $instance;
	}


	/**
	 * @param bool $isUserActive
	 *
	 * @return self
	 */
	public function setIsUserActive($isUserActive): self
	{
		$this->isUserActive = $isUserActive;
		return $this;
	}


	/**
	 * @param bool $isScreenUnlocked
	 *
	 * @return self
	 */
	public function setIsScreenUnlocked($isScreenUnlocked): self
	{
		$this->isScreenUnlocked = $isScreenUnlocked;
		return $this;
	}
}
