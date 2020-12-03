<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFullAXTreeRequestBuilder
{
	private $max_depth;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetFullAXTreeRequest
	{
		$instance = new GetFullAXTreeRequest();
		$instance->max_depth = $this->max_depth;
		return $instance;
	}


	/**
	 * @param int|null $max_depth
	 *
	 * @return self
	 */
	public function setMax_depth($max_depth): self
	{
		$this->max_depth = $max_depth;
		return $this;
	}
}
