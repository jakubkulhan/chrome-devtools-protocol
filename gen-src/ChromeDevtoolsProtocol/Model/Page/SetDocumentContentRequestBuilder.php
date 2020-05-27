<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDocumentContentRequestBuilder
{
	private $frameId;
	private $html;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDocumentContentRequest
	{
		$instance = new SetDocumentContentRequest();
		if ($this->frameId === null) {
			throw new BuilderException('Property [frameId] is required.');
		}
		$instance->frameId = $this->frameId;
		if ($this->html === null) {
			throw new BuilderException('Property [html] is required.');
		}
		$instance->html = $this->html;
		return $instance;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}


	/**
	 * @param string $html
	 *
	 * @return self
	 */
	public function setHtml($html): self
	{
		$this->html = $html;
		return $this;
	}
}
