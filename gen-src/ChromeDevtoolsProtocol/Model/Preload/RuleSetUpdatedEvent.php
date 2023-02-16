<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Upsert. Currently, it is only emitted when a rule set added.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RuleSetUpdatedEvent implements \JsonSerializable
{
	/** @var RuleSet */
	public $ruleSet;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ruleSet)) {
			$instance->ruleSet = RuleSet::fromJson($data->ruleSet);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ruleSet !== null) {
			$data->ruleSet = $this->ruleSet->jsonSerialize();
		}
		return $data;
	}
}
