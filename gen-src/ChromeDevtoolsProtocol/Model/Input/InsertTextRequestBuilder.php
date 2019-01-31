<?php

namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InsertTextRequestBuilder
{
	private $text;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): InsertTextRequest
	{
		$instance = new InsertTextRequest();
		if ($this->text === null) {
			throw new BuilderException('Property [text] is required.');
		}
		$instance->text = $this->text;
		return $instance;
	}


	/**
	 * @param string $text
	 *
	 * @return self
	 */
	public function setText($text): self
	{
		$this->text = $text;
		return $this;
	}
}
