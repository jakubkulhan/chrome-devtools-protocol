<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DiscardSearchResultsRequestBuilder
{
	private $searchId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DiscardSearchResultsRequest
	{
		$instance = new DiscardSearchResultsRequest();
		if ($this->searchId === null) {
			throw new BuilderException('Property [searchId] is required.');
		}
		$instance->searchId = $this->searchId;
		return $instance;
	}


	/**
	 * @param string $searchId
	 *
	 * @return self
	 */
	public function setSearchId($searchId): self
	{
		$this->searchId = $searchId;
		return $this;
	}
}
