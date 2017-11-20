<?php
namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPageScaleFactorRequestBuilder
{
	private $pageScaleFactor;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPageScaleFactorRequest
	{
		$instance = new SetPageScaleFactorRequest();
		if ($this->pageScaleFactor === null) {
			throw new BuilderException('Property [pageScaleFactor] is required.');
		}
		$instance->pageScaleFactor = $this->pageScaleFactor;
		return $instance;
	}


	/**
	 * @param int|float $pageScaleFactor
	 *
	 * @return self
	 */
	public function setPageScaleFactor($pageScaleFactor): self
	{
		$this->pageScaleFactor = $pageScaleFactor;
		return $this;
	}
}
