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
	/** @var string */
	public $dialogId;

	/** @var Account[] */
	public $accounts;

	/**
	 * These exist primarily so that the caller can verify the RP context was used appropriately.
	 *
	 * @var string
	 */
	public $title;

	/** @var string|null */
	public $subtitle;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->dialogId)) {
			$instance->dialogId = (string)$data->dialogId;
		}
		if (isset($data->accounts)) {
			$instance->accounts = [];
			foreach ($data->accounts as $item) {
				$instance->accounts[] = Account::fromJson($item);
			}
		}
		if (isset($data->title)) {
			$instance->title = (string)$data->title;
		}
		if (isset($data->subtitle)) {
			$instance->subtitle = (string)$data->subtitle;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dialogId !== null) {
			$data->dialogId = $this->dialogId;
		}
		if ($this->accounts !== null) {
			$data->accounts = [];
			foreach ($this->accounts as $item) {
				$data->accounts[] = $item->jsonSerialize();
			}
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		if ($this->subtitle !== null) {
			$data->subtitle = $this->subtitle;
		}
		return $data;
	}
}
