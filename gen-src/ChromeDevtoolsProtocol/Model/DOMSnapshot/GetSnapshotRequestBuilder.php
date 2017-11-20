<?php
namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSnapshotRequestBuilder
{
	private $computedStyleWhitelist;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetSnapshotRequest
	{
		$instance = new GetSnapshotRequest();
		if ($this->computedStyleWhitelist === null) {
			throw new BuilderException('Property [computedStyleWhitelist] is required.');
		}
		$instance->computedStyleWhitelist = $this->computedStyleWhitelist;
		return $instance;
	}


	/**
	 * @param string[] $computedStyleWhitelist
	 *
	 * @return self
	 */
	public function setComputedStyleWhitelist($computedStyleWhitelist): self
	{
		$this->computedStyleWhitelist = $computedStyleWhitelist;
		return $this;
	}
}
