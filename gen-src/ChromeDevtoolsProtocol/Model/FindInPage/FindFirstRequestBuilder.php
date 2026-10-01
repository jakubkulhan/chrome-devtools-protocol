<?php

namespace ChromeDevtoolsProtocol\Model\FindInPage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FindFirstRequestBuilder
{
	private $query;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): FindFirstRequest
	{
		$instance = new FindFirstRequest();
		if ($this->query === null) {
			throw new BuilderException('Property [query] is required.');
		}
		$instance->query = $this->query;
		return $instance;
	}


	/**
	 * @param string $query
	 *
	 * @return self
	 */
	public function setQuery($query): self
	{
		$this->query = $query;
		return $this;
	}
}
