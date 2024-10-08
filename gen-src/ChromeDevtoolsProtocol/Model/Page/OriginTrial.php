<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Named type Page.OriginTrial.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OriginTrial implements \JsonSerializable
{
	/** @var string */
	public $trialName;

	/** @var string */
	public $status;

	/** @var OriginTrialTokenWithStatus[] */
	public $tokensWithStatus;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->trialName)) {
			$instance->trialName = (string)$data->trialName;
		}
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		if (isset($data->tokensWithStatus)) {
			$instance->tokensWithStatus = [];
			foreach ($data->tokensWithStatus as $item) {
				$instance->tokensWithStatus[] = OriginTrialTokenWithStatus::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->trialName !== null) {
			$data->trialName = $this->trialName;
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->tokensWithStatus !== null) {
			$data->tokensWithStatus = [];
			foreach ($this->tokensWithStatus as $item) {
				$data->tokensWithStatus[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
