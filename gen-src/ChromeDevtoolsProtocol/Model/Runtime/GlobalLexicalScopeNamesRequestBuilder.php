<?php
namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GlobalLexicalScopeNamesRequestBuilder
{
	private $executionContextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GlobalLexicalScopeNamesRequest
	{
		$instance = new GlobalLexicalScopeNamesRequest();
		$instance->executionContextId = $this->executionContextId;
		return $instance;
	}


	/**
	 * @param int $executionContextId
	 *
	 * @return self
	 */
	public function setExecutionContextId($executionContextId): self
	{
		$this->executionContextId = $executionContextId;
		return $this;
	}
}
