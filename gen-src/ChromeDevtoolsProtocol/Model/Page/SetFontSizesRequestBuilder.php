<?php
namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetFontSizesRequestBuilder
{
	private $fontSizes;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetFontSizesRequest
	{
		$instance = new SetFontSizesRequest();
		if ($this->fontSizes === null) {
			throw new BuilderException('Property [fontSizes] is required.');
		}
		$instance->fontSizes = $this->fontSizes;
		return $instance;
	}


	/**
	 * @param FontSizes $fontSizes
	 *
	 * @return self
	 */
	public function setFontSizes($fontSizes): self
	{
		$this->fontSizes = $fontSizes;
		return $this;
	}
}
