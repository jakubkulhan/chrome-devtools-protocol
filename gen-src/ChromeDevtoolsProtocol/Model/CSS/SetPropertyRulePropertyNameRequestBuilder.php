<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPropertyRulePropertyNameRequestBuilder
{
	private $styleSheetId;
	private $range;
	private $propertyName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPropertyRulePropertyNameRequest
	{
		$instance = new SetPropertyRulePropertyNameRequest();
		if ($this->styleSheetId === null) {
			throw new BuilderException('Property [styleSheetId] is required.');
		}
		$instance->styleSheetId = $this->styleSheetId;
		if ($this->range === null) {
			throw new BuilderException('Property [range] is required.');
		}
		$instance->range = $this->range;
		if ($this->propertyName === null) {
			throw new BuilderException('Property [propertyName] is required.');
		}
		$instance->propertyName = $this->propertyName;
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
	 * @param string $propertyName
	 *
	 * @return self
	 */
	public function setPropertyName($propertyName): self
	{
		$this->propertyName = $propertyName;
		return $this;
	}
}
