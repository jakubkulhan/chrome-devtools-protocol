<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.ServiceWorkerRouterInfo.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ServiceWorkerRouterInfo implements \JsonSerializable
{
	/**
	 * ID of the rule matched. If there is a matched rule, this field will be set, otherwiser no value will be set.
	 *
	 * @var int|null
	 */
	public $ruleIdMatched;

	/**
	 * The router source of the matched rule. If there is a matched rule, this field will be set, otherwise no value will be set.
	 *
	 * @var string
	 */
	public $matchedSourceType;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ruleIdMatched)) {
			$instance->ruleIdMatched = (int)$data->ruleIdMatched;
		}
		if (isset($data->matchedSourceType)) {
			$instance->matchedSourceType = (string)$data->matchedSourceType;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ruleIdMatched !== null) {
			$data->ruleIdMatched = $this->ruleIdMatched;
		}
		if ($this->matchedSourceType !== null) {
			$data->matchedSourceType = $this->matchedSourceType;
		}
		return $data;
	}
}
