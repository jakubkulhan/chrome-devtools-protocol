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
	private $emulateOfflineServiceWorker;
	private $matchedNetworkConditions;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EmulateNetworkConditionsByRuleRequest
	{
		$instance = new EmulateNetworkConditionsByRuleRequest();
		$instance->offline = $this->offline;
		$instance->emulateOfflineServiceWorker = $this->emulateOfflineServiceWorker;
		if ($this->matchedNetworkConditions === null) {
			throw new BuilderException('Property [matchedNetworkConditions] is required.');
		}
		$instance->matchedNetworkConditions = $this->matchedNetworkConditions;
		return $instance;
	}


	/**
	 * @param bool|null $offline
	 *
	 * @return self
	 */
	public function setOffline($offline): self
	{
		$this->offline = $offline;
		return $this;
	}


	/**
	 * @param bool|null $emulateOfflineServiceWorker
	 *
	 * @return self
	 */
	public function setEmulateOfflineServiceWorker($emulateOfflineServiceWorker): self
	{
		$this->emulateOfflineServiceWorker = $emulateOfflineServiceWorker;
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
