<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.getCertificate command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCertificateResponse implements \JsonSerializable
{
	/** @var string[] */
	public $tableNames;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->tableNames)) {
			$instance->tableNames = [];
			foreach ($data->tableNames as $item) {
				$instance->tableNames[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->tableNames !== null) {
			$data->tableNames = [];
			foreach ($this->tableNames as $item) {
				$data->tableNames[] = $item;
			}
		}
		return $data;
	}
}
