<?php

namespace ChromeDevtoolsProtocol\Model\Performance;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTimeDomainRequestBuilder
{
	private $timeDomain;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetTimeDomainRequest
	{
		$instance = new SetTimeDomainRequest();
		if ($this->timeDomain === null) {
			throw new BuilderException('Property [timeDomain] is required.');
		}
		$instance->timeDomain = $this->timeDomain;
		return $instance;
	}


	/**
	 * @param string $timeDomain
	 *
	 * @return self
	 */
	public function setTimeDomain($timeDomain): self
	{
		$this->timeDomain = $timeDomain;
		return $this;
	}
}
