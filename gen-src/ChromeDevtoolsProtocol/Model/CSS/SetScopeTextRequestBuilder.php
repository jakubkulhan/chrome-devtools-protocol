<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetScopeTextRequestBuilder
{
	private $styleSheetId;
	private $range;
	private $text;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetScopeTextRequest
	{
		$instance = new SetScopeTextRequest();
		if ($this->styleSheetId === null) {
			throw new BuilderException('Property [styleSheetId] is required.');
		}
		$instance->styleSheetId = $this->styleSheetId;
		if ($this->range === null) {
			throw new BuilderException('Property [range] is required.');
		}
		$instance->range = $this->range;
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
	 * @param SourceRange $range
	 *
	 * @return self
	 */
	public function setRange($range): self
	{
		$this->range = $range;
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
