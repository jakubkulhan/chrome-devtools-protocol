<?php
namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NavigateToHistoryEntryRequestBuilder
{
	private $entryId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): NavigateToHistoryEntryRequest
	{
		$instance = new NavigateToHistoryEntryRequest();
		if ($this->entryId === null) {
			throw new BuilderException('Property [entryId] is required.');
		}
		$instance->entryId = $this->entryId;
		return $instance;
	}


	/**
	 * @param int $entryId
	 *
	 * @return self
	 */
	public function setEntryId($entryId): self
	{
		$this->entryId = $entryId;
		return $this;
	}
}
