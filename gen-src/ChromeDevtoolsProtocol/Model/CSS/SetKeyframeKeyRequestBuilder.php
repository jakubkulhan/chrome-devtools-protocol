<?php
namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetKeyframeKeyRequestBuilder
{
	private $styleSheetId;

	private $range;

	private $keyText;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetKeyframeKeyRequest
	{
		$instance = new SetKeyframeKeyRequest();
		if ($this->styleSheetId === null) {
			throw new BuilderException('Property [styleSheetId] is required.');
		}
		$instance->styleSheetId = $this->styleSheetId;
		if ($this->range === null) {
			throw new BuilderException('Property [range] is required.');
		}
		$instance->range = $this->range;
		if ($this->keyText === null) {
			throw new BuilderException('Property [keyText] is required.');
		}
		$instance->keyText = $this->keyText;
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
	 * @param string $keyText
	 *
	 * @return self
	 */
	public function setKeyText($keyText): self
	{
		$this->keyText = $keyText;
		return $this;
	}
}
