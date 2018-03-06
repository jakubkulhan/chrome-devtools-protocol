<?php
namespace ChromeDevtoolsProtocol\Model\HeadlessExperimental;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnterDeterministicModeRequestBuilder
{
	private $initialDate;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnterDeterministicModeRequest
	{
		$instance = new EnterDeterministicModeRequest();
		$instance->initialDate = $this->initialDate;
		return $instance;
	}


	/**
	 * @param int|float|null $initialDate
	 *
	 * @return self
	 */
	public function setInitialDate($initialDate): self
	{
		$this->initialDate = $initialDate;
		return $this;
	}
}
