<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Details for issues around "Attribution Reporting API" usage. Explainer: https://github.com/WICG/conversion-measurement-api
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingIssueDetails implements \JsonSerializable
{
	/** @var string */
	public $violationType;

	/** @var AffectedFrame|null */
	public $frame;

	/** @var AffectedRequest|null */
	public $request;

	/** @var int */
	public $violatingNodeId;

	/** @var string|null */
	public $invalidParameter;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->violationType)) {
			$instance->violationType = (string)$data->violationType;
		}
		if (isset($data->frame)) {
			$instance->frame = AffectedFrame::fromJson($data->frame);
		}
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		if (isset($data->violatingNodeId)) {
			$instance->violatingNodeId = (int)$data->violatingNodeId;
		}
		if (isset($data->invalidParameter)) {
			$instance->invalidParameter = (string)$data->invalidParameter;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->violationType !== null) {
			$data->violationType = $this->violationType;
		}
		if ($this->frame !== null) {
			$data->frame = $this->frame->jsonSerialize();
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		if ($this->violatingNodeId !== null) {
			$data->violatingNodeId = $this->violatingNodeId;
		}
		if ($this->invalidParameter !== null) {
			$data->invalidParameter = $this->invalidParameter;
		}
		return $data;
	}
}
