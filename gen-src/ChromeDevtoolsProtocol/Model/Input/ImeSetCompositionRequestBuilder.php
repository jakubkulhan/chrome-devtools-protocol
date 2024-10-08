<?php

namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ImeSetCompositionRequestBuilder
{
	private $text;
	private $selectionStart;
	private $selectionEnd;
	private $replacementStart;
	private $replacementEnd;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ImeSetCompositionRequest
	{
		$instance = new ImeSetCompositionRequest();
		if ($this->text === null) {
			throw new BuilderException('Property [text] is required.');
		}
		$instance->text = $this->text;
		if ($this->selectionStart === null) {
			throw new BuilderException('Property [selectionStart] is required.');
		}
		$instance->selectionStart = $this->selectionStart;
		if ($this->selectionEnd === null) {
			throw new BuilderException('Property [selectionEnd] is required.');
		}
		$instance->selectionEnd = $this->selectionEnd;
		$instance->replacementStart = $this->replacementStart;
		$instance->replacementEnd = $this->replacementEnd;
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


	/**
	 * @param int $selectionStart
	 *
	 * @return self
	 */
	public function setSelectionStart($selectionStart): self
	{
		$this->selectionStart = $selectionStart;
		return $this;
	}


	/**
	 * @param int $selectionEnd
	 *
	 * @return self
	 */
	public function setSelectionEnd($selectionEnd): self
	{
		$this->selectionEnd = $selectionEnd;
		return $this;
	}


	/**
	 * @param int|null $replacementStart
	 *
	 * @return self
	 */
	public function setReplacementStart($replacementStart): self
	{
		$this->replacementStart = $replacementStart;
		return $this;
	}


	/**
	 * @param int|null $replacementEnd
	 *
	 * @return self
	 */
	public function setReplacementEnd($replacementEnd): self
	{
		$this->replacementEnd = $replacementEnd;
		return $this;
	}
}
