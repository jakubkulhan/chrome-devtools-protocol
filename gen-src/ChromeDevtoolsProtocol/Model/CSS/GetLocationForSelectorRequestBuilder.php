<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetLocationForSelectorRequestBuilder
{
	private $styleSheetId;
	private $selectorText;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetLocationForSelectorRequest
	{
		$instance = new GetLocationForSelectorRequest();
		if ($this->styleSheetId === null) {
			throw new BuilderException('Property [styleSheetId] is required.');
		}
		$instance->styleSheetId = $this->styleSheetId;
		if ($this->selectorText === null) {
			throw new BuilderException('Property [selectorText] is required.');
		}
		$instance->selectorText = $this->selectorText;
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
	 * @param string $selectorText
	 *
	 * @return self
	 */
	public function setSelectorText($selectorText): self
	{
		$this->selectorText = $selectorText;
		return $this;
	}
}
