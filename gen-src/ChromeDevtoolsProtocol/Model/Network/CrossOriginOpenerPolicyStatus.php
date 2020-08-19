<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.CrossOriginOpenerPolicyStatus.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CrossOriginOpenerPolicyStatus implements \JsonSerializable
{
	/** @var string */
	public $value;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}
}
