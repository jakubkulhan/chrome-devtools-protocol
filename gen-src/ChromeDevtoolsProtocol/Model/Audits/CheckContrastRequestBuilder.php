<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CheckContrastRequestBuilder
{
	private $reportAAA;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CheckContrastRequest
	{
		$instance = new CheckContrastRequest();
		$instance->reportAAA = $this->reportAAA;
		return $instance;
	}


	/**
	 * @param bool|null $reportAAA
	 *
	 * @return self
	 */
	public function setReportAAA($reportAAA): self
	{
		$this->reportAAA = $reportAAA;
		return $this;
	}
}
