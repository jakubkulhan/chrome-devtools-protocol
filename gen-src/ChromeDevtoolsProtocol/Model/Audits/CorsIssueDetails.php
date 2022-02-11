<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

use ChromeDevtoolsProtocol\Model\Network\ClientSecurityState;
use ChromeDevtoolsProtocol\Model\Network\CorsErrorStatus;

/**
 * Details for a CORS related issue, e.g. a warning or error related to CORS RFC1918 enforcement.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CorsIssueDetails implements \JsonSerializable
{
	/** @var CorsErrorStatus */
	public $corsErrorStatus;

	/** @var bool */
	public $isWarning;

	/** @var AffectedRequest */
	public $request;

	/** @var SourceCodeLocation|null */
	public $location;

	/** @var string|null */
	public $initiatorOrigin;

	/** @var string */
	public $resourceIPAddressSpace;

	/** @var ClientSecurityState|null */
	public $clientSecurityState;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->corsErrorStatus)) {
			$instance->corsErrorStatus = CorsErrorStatus::fromJson($data->corsErrorStatus);
		}
		if (isset($data->isWarning)) {
			$instance->isWarning = (bool)$data->isWarning;
		}
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		if (isset($data->location)) {
			$instance->location = SourceCodeLocation::fromJson($data->location);
		}
		if (isset($data->initiatorOrigin)) {
			$instance->initiatorOrigin = (string)$data->initiatorOrigin;
		}
		if (isset($data->resourceIPAddressSpace)) {
			$instance->resourceIPAddressSpace = (string)$data->resourceIPAddressSpace;
		}
		if (isset($data->clientSecurityState)) {
			$instance->clientSecurityState = ClientSecurityState::fromJson($data->clientSecurityState);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->corsErrorStatus !== null) {
			$data->corsErrorStatus = $this->corsErrorStatus->jsonSerialize();
		}
		if ($this->isWarning !== null) {
			$data->isWarning = $this->isWarning;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		if ($this->location !== null) {
			$data->location = $this->location->jsonSerialize();
		}
		if ($this->initiatorOrigin !== null) {
			$data->initiatorOrigin = $this->initiatorOrigin;
		}
		if ($this->resourceIPAddressSpace !== null) {
			$data->resourceIPAddressSpace = $this->resourceIPAddressSpace;
		}
		if ($this->clientSecurityState !== null) {
			$data->clientSecurityState = $this->clientSecurityState->jsonSerialize();
		}
		return $data;
	}
}
