<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.stopRuleUsageTracking command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StopRuleUsageTrackingResponse implements \JsonSerializable
{
	/** @var RuleUsage[] */
	public $ruleUsage;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ruleUsage)) {
			$instance->ruleUsage = [];
			foreach ($data->ruleUsage as $item) {
				$instance->ruleUsage[] = RuleUsage::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ruleUsage !== null) {
			$data->ruleUsage = [];
			foreach ($this->ruleUsage as $item) {
				$data->ruleUsage[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
