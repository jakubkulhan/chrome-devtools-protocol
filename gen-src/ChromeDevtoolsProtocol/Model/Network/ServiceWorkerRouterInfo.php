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
	/** @var int */
	public $ruleIdMatched;

	/** @var string */
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
