<?php

namespace ChromeDevtoolsProtocol\Model\Performance;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $timeDomain;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		$instance->timeDomain = $this->timeDomain;
		return $instance;
	}


	/**
	 * @param string|null $timeDomain
	 *
	 * @return self
	 */
	public function setTimeDomain($timeDomain): self
	{
		$this->timeDomain = $timeDomain;
		return $this;
	}
}
