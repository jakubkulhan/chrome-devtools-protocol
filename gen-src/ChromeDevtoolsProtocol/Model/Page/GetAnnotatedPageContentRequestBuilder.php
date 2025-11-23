<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAnnotatedPageContentRequestBuilder
{
	private $includeActionableInformation;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetAnnotatedPageContentRequest
	{
		$instance = new GetAnnotatedPageContentRequest();
		$instance->includeActionableInformation = $this->includeActionableInformation;
		return $instance;
	}


	/**
	 * @param bool|null $includeActionableInformation
	 *
	 * @return self
	 */
	public function setIncludeActionableInformation($includeActionableInformation): self
	{
		$this->includeActionableInformation = $includeActionableInformation;
		return $this;
	}
}
