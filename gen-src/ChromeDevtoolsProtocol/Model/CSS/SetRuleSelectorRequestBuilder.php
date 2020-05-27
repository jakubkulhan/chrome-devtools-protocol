<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRuleSelectorRequestBuilder
{
	private $styleSheetId;
	private $range;
	private $selector;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetRuleSelectorRequest
	{
		$instance = new SetRuleSelectorRequest();
		if ($this->styleSheetId === null) {
			throw new BuilderException('Property [styleSheetId] is required.');
		}
		$instance->styleSheetId = $this->styleSheetId;
		if ($this->range === null) {
			throw new BuilderException('Property [range] is required.');
		}
		$instance->range = $this->range;
		if ($this->selector === null) {
			throw new BuilderException('Property [selector] is required.');
		}
		$instance->selector = $this->selector;
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
	 * @param string $selector
	 *
	 * @return self
	 */
	public function setSelector($selector): self
	{
		$this->selector = $selector;
		return $this;
	}
}
