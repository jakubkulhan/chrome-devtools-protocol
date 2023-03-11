<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * Named type FedCm.DialogShownEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DialogShownEvent implements \JsonSerializable
{
	/** @var Account[] */
	public $accounts;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->accounts)) {
			$instance->accounts = [];
			foreach ($data->accounts as $item) {
				$instance->accounts[] = Account::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->accounts !== null) {
			$data->accounts = [];
			foreach ($this->accounts as $item) {
				$data->accounts[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
