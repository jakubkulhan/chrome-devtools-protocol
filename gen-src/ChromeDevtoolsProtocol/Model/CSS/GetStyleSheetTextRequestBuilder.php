<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetStyleSheetTextRequestBuilder
{
	private $styleSheetId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetStyleSheetTextRequest
	{
		$instance = new GetStyleSheetTextRequest();
		if ($this->styleSheetId === null) {
			throw new BuilderException('Property [styleSheetId] is required.');
		}
		$instance->styleSheetId = $this->styleSheetId;
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
}
