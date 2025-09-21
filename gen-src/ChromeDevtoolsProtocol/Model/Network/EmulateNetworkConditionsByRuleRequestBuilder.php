<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EmulateNetworkConditionsByRuleRequestBuilder
{
	private $offline;
	private $matchedNetworkConditions;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EmulateNetworkConditionsByRuleRequest
	{
		$instance = new EmulateNetworkConditionsByRuleRequest();
		if ($this->offline === null) {
			throw new BuilderException('Property [offline] is required.');
		}
		$instance->offline = $this->offline;
		if ($this->matchedNetworkConditions === null) {
			throw new BuilderException('Property [matchedNetworkConditions] is required.');
		}
		$instance->matchedNetworkConditions = $this->matchedNetworkConditions;
		return $instance;
	}


	/**
	 * @param bool $offline
	 *
	 * @return self
	 */
	public function setOffline($offline): self
	{
		$this->offline = $offline;
		return $this;
	}


	/**
	 * @param NetworkConditions[] $matchedNetworkConditions
	 *
	 * @return self
	 */
	public function setMatchedNetworkConditions($matchedNetworkConditions): self
	{
		$this->matchedNetworkConditions = $matchedNetworkConditions;
		return $this;
	}
}
