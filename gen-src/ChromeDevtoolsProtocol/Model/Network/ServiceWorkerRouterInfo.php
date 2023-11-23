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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ruleIdMatched !== null) {
			$data->ruleIdMatched = $this->ruleIdMatched;
		}
		return $data;
	}
}
