<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.HeavyAdIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HeavyAdIssueDetails implements \JsonSerializable
{
	/**
	 * The resolution status, either blocking the content or warning.
	 *
	 * @var string
	 */
	public $resolution;

	/**
	 * The reason the ad was blocked, total network or cpu or peak cpu.
	 *
	 * @var string
	 */
	public $reason;

	/**
	 * The frame that was blocked.
	 *
	 * @var AffectedFrame
	 */
	public $frame;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->resolution)) {
			$instance->resolution = (string)$data->resolution;
		}
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		if (isset($data->frame)) {
			$instance->frame = AffectedFrame::fromJson($data->frame);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->resolution !== null) {
			$data->resolution = $this->resolution;
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		if ($this->frame !== null) {
			$data->frame = $this->frame->jsonSerialize();
		}
		return $data;
	}
}
