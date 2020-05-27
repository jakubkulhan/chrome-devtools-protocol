<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFlattenedDocumentRequestBuilder
{
	private $depth;
	private $pierce;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetFlattenedDocumentRequest
	{
		$instance = new GetFlattenedDocumentRequest();
		$instance->depth = $this->depth;
		$instance->pierce = $this->pierce;
		return $instance;
	}


	/**
	 * @param int|null $depth
	 *
	 * @return self
	 */
	public function setDepth($depth): self
	{
		$this->depth = $depth;
		return $this;
	}


	/**
	 * @param bool|null $pierce
	 *
	 * @return self
	 */
	public function setPierce($pierce): self
	{
		$this->pierce = $pierce;
		return $this;
	}
}
