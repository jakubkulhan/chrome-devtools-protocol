<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.getSecurityIsolationStatus command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSecurityIsolationStatusResponse implements \JsonSerializable
{
	/** @var SecurityIsolationStatus */
	public $status;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->status)) {
			$instance->status = SecurityIsolationStatus::fromJson($data->status);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->status !== null) {
			$data->status = $this->status->jsonSerialize();
		}
		return $data;
	}
}
