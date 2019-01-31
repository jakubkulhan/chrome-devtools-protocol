<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetFontFamiliesRequestBuilder
{
	private $fontFamilies;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetFontFamiliesRequest
	{
		$instance = new SetFontFamiliesRequest();
		if ($this->fontFamilies === null) {
			throw new BuilderException('Property [fontFamilies] is required.');
		}
		$instance->fontFamilies = $this->fontFamilies;
		return $instance;
	}


	/**
	 * @param FontFamilies $fontFamilies
	 *
	 * @return self
	 */
	public function setFontFamilies($fontFamilies): self
	{
		$this->fontFamilies = $fontFamilies;
		return $this;
	}
}
