<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetStyleTextsRequestBuilder
{
	private $edits;
	private $nodeForPropertySyntaxValidation;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetStyleTextsRequest
	{
		$instance = new SetStyleTextsRequest();
		if ($this->edits === null) {
			throw new BuilderException('Property [edits] is required.');
		}
		$instance->edits = $this->edits;
		$instance->nodeForPropertySyntaxValidation = $this->nodeForPropertySyntaxValidation;
		return $instance;
	}


	/**
	 * @param StyleDeclarationEdit[] $edits
	 *
	 * @return self
	 */
	public function setEdits($edits): self
	{
		$this->edits = $edits;
		return $this;
	}


	/**
	 * @param int $nodeForPropertySyntaxValidation
	 *
	 * @return self
	 */
	public function setNodeForPropertySyntaxValidation($nodeForPropertySyntaxValidation): self
	{
		$this->nodeForPropertySyntaxValidation = $nodeForPropertySyntaxValidation;
		return $this;
	}
}
