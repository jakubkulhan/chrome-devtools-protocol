<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.emulateNetworkConditionsByRule command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EmulateNetworkConditionsByRuleRequest implements \JsonSerializable
{
	/**
	 * True to emulate internet disconnection.
	 *
	 * @var bool
	 */
	public $offline;

	/**
	 * Configure conditions for matching requests. If multiple entries match a request, the first entry wins. Global conditions can be configured by leaving the urlPattern for the conditions empty. These global conditions are also applied for throttling of p2p connections.
	 *
	 * @var NetworkConditions[]
	 */
	public $matchedNetworkConditions;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->offline)) {
			$instance->offline = (bool)$data->offline;
		}
		if (isset($data->matchedNetworkConditions)) {
			$instance->matchedNetworkConditions = [];
			foreach ($data->matchedNetworkConditions as $item) {
				$instance->matchedNetworkConditions[] = NetworkConditions::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->offline !== null) {
			$data->offline = $this->offline;
		}
		if ($this->matchedNetworkConditions !== null) {
			$data->matchedNetworkConditions = [];
			foreach ($this->matchedNetworkConditions as $item) {
				$data->matchedNetworkConditions[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EmulateNetworkConditionsByRuleRequestBuilder
	 */
	public static function builder(): EmulateNetworkConditionsByRuleRequestBuilder
	{
		return new EmulateNetworkConditionsByRuleRequestBuilder();
	}
}
