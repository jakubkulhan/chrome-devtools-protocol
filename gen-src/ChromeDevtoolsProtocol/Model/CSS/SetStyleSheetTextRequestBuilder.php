<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetStyleSheetTextRequestBuilder
{
	private $styleSheetId;

	private $text;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetStyleSheetTextRequest
	{
		$instance = new SetStyleSheetTextRequest();
		if ($this->styleSheetId === null) {
			throw new BuilderException('Property [styleSheetId] is required.');
		}
		$instance->styleSheetId = $this->styleSheetId;
		if ($this->text === null) {
			throw new BuilderException('Property [text] is required.');
		}
		$instance->text = $this->text;
		return $instance;
	}


	/**
	 * @param string $styleSheetId
	 *
	 * @return self
	 */
	public function setStyleSheetId($styleSheetId): self
	{
		$this->styleSheetId = $styleSheetId;
		return $this;
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
