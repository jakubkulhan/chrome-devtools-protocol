<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OverrideQuotaForOriginRequestBuilder
{
	private $origin;
	private $quotaSize;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): OverrideQuotaForOriginRequest
	{
		$instance = new OverrideQuotaForOriginRequest();
		if ($this->origin === null) {
			throw new BuilderException('Property [origin] is required.');
		}
		$instance->origin = $this->origin;
		$instance->quotaSize = $this->quotaSize;
		return $instance;
	}


	/**
	 * @param string $origin
	 *
	 * @return self
	 */
	public function setOrigin($origin): self
	{
		$this->origin = $origin;
		return $this;
	}


	/**
	 * @param int|float|null $quotaSize
	 *
	 * @return self
	 */
	public function setQuotaSize($quotaSize): self
	{
		$this->quotaSize = $quotaSize;
		return $this;
	}
}
