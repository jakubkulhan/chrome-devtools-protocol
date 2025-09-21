<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.emulateNetworkConditionsByRule command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EmulateNetworkConditionsByRuleResponse implements \JsonSerializable
{
	/**
	 * An id for each entry in matchedNetworkConditions. The id will be included in the requestWillBeSentExtraInfo for requests affected by a rule.
	 *
	 * @var string[]
	 */
	public $ruleIds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ruleIds)) {
			$instance->ruleIds = [];
			foreach ($data->ruleIds as $item) {
				$instance->ruleIds[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ruleIds !== null) {
			$data->ruleIds = [];
			foreach ($this->ruleIds as $item) {
				$data->ruleIds[] = $item;
			}
		}
		return $data;
	}
}
