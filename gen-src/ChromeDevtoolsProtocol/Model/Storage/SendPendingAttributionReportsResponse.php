<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.sendPendingAttributionReports command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SendPendingAttributionReportsResponse implements \JsonSerializable
{
	/**
	 * The number of reports that were sent.
	 *
	 * @var int
	 */
	public $numSent;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->numSent)) {
			$instance->numSent = (int)$data->numSent;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->numSent !== null) {
			$data->numSent = $this->numSent;
		}
		return $data;
	}
}
