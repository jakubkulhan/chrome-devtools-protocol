<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetTargetsRequestBuilder
{
	private $filter;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetTargetsRequest
	{
		$instance = new GetTargetsRequest();
		$instance->filter = $this->filter;
		return $instance;
	}


	/**
	 * @param FilterEntry[] $filter
	 *
	 * @return self
	 */
	public function setFilter($filter): self
	{
		$this->filter = $filter;
		return $this;
	}
}
