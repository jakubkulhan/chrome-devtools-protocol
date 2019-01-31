<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddRuleRequestBuilder
{
	private $styleSheetId;

	private $ruleText;

	private $location;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddRuleRequest
	{
		$instance = new AddRuleRequest();
		if ($this->styleSheetId === null) {
			throw new BuilderException('Property [styleSheetId] is required.');
		}
		$instance->styleSheetId = $this->styleSheetId;
		if ($this->ruleText === null) {
			throw new BuilderException('Property [ruleText] is required.');
		}
		$instance->ruleText = $this->ruleText;
		if ($this->location === null) {
			throw new BuilderException('Property [location] is required.');
		}
		$instance->location = $this->location;
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
	 * @param string $ruleText
	 *
	 * @return self
	 */
	public function setRuleText($ruleText): self
	{
		$this->ruleText = $ruleText;
		return $this;
	}


	/**
	 * @param SourceRange $location
	 *
	 * @return self
	 */
	public function setLocation($location): self
	{
		$this->location = $location;
		return $this;
	}
}
