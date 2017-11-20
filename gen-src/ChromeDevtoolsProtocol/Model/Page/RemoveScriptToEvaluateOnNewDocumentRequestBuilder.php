<?php
namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveScriptToEvaluateOnNewDocumentRequestBuilder
{
	private $identifier;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveScriptToEvaluateOnNewDocumentRequest
	{
		$instance = new RemoveScriptToEvaluateOnNewDocumentRequest();
		if ($this->identifier === null) {
			throw new BuilderException('Property [identifier] is required.');
		}
		$instance->identifier = $this->identifier;
		return $instance;
	}


	/**
	 * @param string $identifier
	 *
	 * @return self
	 */
	public function setIdentifier($identifier): self
	{
		$this->identifier = $identifier;
		return $this;
	}
}
