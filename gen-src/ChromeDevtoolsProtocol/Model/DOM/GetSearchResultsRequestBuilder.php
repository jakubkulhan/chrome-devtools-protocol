<?php
namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSearchResultsRequestBuilder
{
	private $searchId;

	private $fromIndex;

	private $toIndex;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetSearchResultsRequest
	{
		$instance = new GetSearchResultsRequest();
		if ($this->searchId === null) {
			throw new BuilderException('Property [searchId] is required.');
		}
		$instance->searchId = $this->searchId;
		if ($this->fromIndex === null) {
			throw new BuilderException('Property [fromIndex] is required.');
		}
		$instance->fromIndex = $this->fromIndex;
		if ($this->toIndex === null) {
			throw new BuilderException('Property [toIndex] is required.');
		}
		$instance->toIndex = $this->toIndex;
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


	/**
	 * @param int $fromIndex
	 *
	 * @return self
	 */
	public function setFromIndex($fromIndex): self
	{
		$this->fromIndex = $fromIndex;
		return $this;
	}


	/**
	 * @param int $toIndex
	 *
	 * @return self
	 */
	public function setToIndex($toIndex): self
	{
		$this->toIndex = $toIndex;
		return $this;
	}
}
