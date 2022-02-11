<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Details for a request that has been blocked with the BLOCKED_BY_RESPONSE code. Currently only used for COEP/COOP, but may be extended to include some CSP errors in the future.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BlockedByResponseIssueDetails implements \JsonSerializable
{
	/** @var AffectedRequest */
	public $request;

	/** @var AffectedFrame|null */
	public $parentFrame;

	/** @var AffectedFrame|null */
	public $blockedFrame;

	/** @var string */
	public $reason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		if (isset($data->parentFrame)) {
			$instance->parentFrame = AffectedFrame::fromJson($data->parentFrame);
		}
		if (isset($data->blockedFrame)) {
			$instance->blockedFrame = AffectedFrame::fromJson($data->blockedFrame);
		}
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		if ($this->parentFrame !== null) {
			$data->parentFrame = $this->parentFrame->jsonSerialize();
		}
		if ($this->blockedFrame !== null) {
			$data->blockedFrame = $this->blockedFrame->jsonSerialize();
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		return $data;
	}
}
