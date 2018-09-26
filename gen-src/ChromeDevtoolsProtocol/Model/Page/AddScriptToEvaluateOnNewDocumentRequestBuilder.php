<?php
namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddScriptToEvaluateOnNewDocumentRequestBuilder
{
	private $source;

	private $worldName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddScriptToEvaluateOnNewDocumentRequest
	{
		$instance = new AddScriptToEvaluateOnNewDocumentRequest();
		if ($this->source === null) {
			throw new BuilderException('Property [source] is required.');
		}
		$instance->source = $this->source;
		$instance->worldName = $this->worldName;
		return $instance;
	}


	/**
	 * @param string $source
	 *
	 * @return self
	 */
	public function setSource($source): self
	{
		$this->source = $source;
		return $this;
	}


	/**
	 * @param string|null $worldName
	 *
	 * @return self
	 */
	public function setWorldName($worldName): self
	{
		$this->worldName = $worldName;
		return $this;
	}
}
