<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This struct holds a list of optional fields with additional information specific to the kind of issue. When adding a new issue code, please also add a new optional field to this type.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectorIssueDetails implements \JsonSerializable
{
	/** @var CookieIssueDetails|null */
	public $cookieIssueDetails;

	/** @var MixedContentIssueDetails|null */
	public $mixedContentIssueDetails;

	/** @var BlockedByResponseIssueDetails|null */
	public $blockedByResponseIssueDetails;

	/** @var HeavyAdIssueDetails|null */
	public $heavyAdIssueDetails;

	/** @var ContentSecurityPolicyIssueDetails|null */
	public $contentSecurityPolicyIssueDetails;

	/** @var SharedArrayBufferIssueDetails|null */
	public $sharedArrayBufferIssueDetails;

	/** @var TrustedWebActivityIssueDetails|null */
	public $twaQualityEnforcementDetails;

	/** @var LowTextContrastIssueDetails|null */
	public $lowTextContrastIssueDetails;

	/** @var CorsIssueDetails|null */
	public $corsIssueDetails;

	/** @var AttributionReportingIssueDetails|null */
	public $attributionReportingIssueDetails;

	/** @var QuirksModeIssueDetails|null */
	public $quirksModeIssueDetails;

	/** @var NavigatorUserAgentIssueDetails|null */
	public $navigatorUserAgentIssueDetails;

	/** @var GenericIssueDetails|null */
	public $genericIssueDetails;

	/** @var DeprecationIssueDetails|null */
	public $deprecationIssueDetails;

	/** @var ClientHintIssueDetails|null */
	public $clientHintIssueDetails;

	/** @var FederatedAuthRequestIssueDetails|null */
	public $federatedAuthRequestIssueDetails;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cookieIssueDetails)) {
			$instance->cookieIssueDetails = CookieIssueDetails::fromJson($data->cookieIssueDetails);
		}
		if (isset($data->mixedContentIssueDetails)) {
			$instance->mixedContentIssueDetails = MixedContentIssueDetails::fromJson($data->mixedContentIssueDetails);
		}
		if (isset($data->blockedByResponseIssueDetails)) {
			$instance->blockedByResponseIssueDetails = BlockedByResponseIssueDetails::fromJson($data->blockedByResponseIssueDetails);
		}
		if (isset($data->heavyAdIssueDetails)) {
			$instance->heavyAdIssueDetails = HeavyAdIssueDetails::fromJson($data->heavyAdIssueDetails);
		}
		if (isset($data->contentSecurityPolicyIssueDetails)) {
			$instance->contentSecurityPolicyIssueDetails = ContentSecurityPolicyIssueDetails::fromJson($data->contentSecurityPolicyIssueDetails);
		}
		if (isset($data->sharedArrayBufferIssueDetails)) {
			$instance->sharedArrayBufferIssueDetails = SharedArrayBufferIssueDetails::fromJson($data->sharedArrayBufferIssueDetails);
		}
		if (isset($data->twaQualityEnforcementDetails)) {
			$instance->twaQualityEnforcementDetails = TrustedWebActivityIssueDetails::fromJson($data->twaQualityEnforcementDetails);
		}
		if (isset($data->lowTextContrastIssueDetails)) {
			$instance->lowTextContrastIssueDetails = LowTextContrastIssueDetails::fromJson($data->lowTextContrastIssueDetails);
		}
		if (isset($data->corsIssueDetails)) {
			$instance->corsIssueDetails = CorsIssueDetails::fromJson($data->corsIssueDetails);
		}
		if (isset($data->attributionReportingIssueDetails)) {
			$instance->attributionReportingIssueDetails = AttributionReportingIssueDetails::fromJson($data->attributionReportingIssueDetails);
		}
		if (isset($data->quirksModeIssueDetails)) {
			$instance->quirksModeIssueDetails = QuirksModeIssueDetails::fromJson($data->quirksModeIssueDetails);
		}
		if (isset($data->navigatorUserAgentIssueDetails)) {
			$instance->navigatorUserAgentIssueDetails = NavigatorUserAgentIssueDetails::fromJson($data->navigatorUserAgentIssueDetails);
		}
		if (isset($data->genericIssueDetails)) {
			$instance->genericIssueDetails = GenericIssueDetails::fromJson($data->genericIssueDetails);
		}
		if (isset($data->deprecationIssueDetails)) {
			$instance->deprecationIssueDetails = DeprecationIssueDetails::fromJson($data->deprecationIssueDetails);
		}
		if (isset($data->clientHintIssueDetails)) {
			$instance->clientHintIssueDetails = ClientHintIssueDetails::fromJson($data->clientHintIssueDetails);
		}
		if (isset($data->federatedAuthRequestIssueDetails)) {
			$instance->federatedAuthRequestIssueDetails = FederatedAuthRequestIssueDetails::fromJson($data->federatedAuthRequestIssueDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cookieIssueDetails !== null) {
			$data->cookieIssueDetails = $this->cookieIssueDetails->jsonSerialize();
		}
		if ($this->mixedContentIssueDetails !== null) {
			$data->mixedContentIssueDetails = $this->mixedContentIssueDetails->jsonSerialize();
		}
		if ($this->blockedByResponseIssueDetails !== null) {
			$data->blockedByResponseIssueDetails = $this->blockedByResponseIssueDetails->jsonSerialize();
		}
		if ($this->heavyAdIssueDetails !== null) {
			$data->heavyAdIssueDetails = $this->heavyAdIssueDetails->jsonSerialize();
		}
		if ($this->contentSecurityPolicyIssueDetails !== null) {
			$data->contentSecurityPolicyIssueDetails = $this->contentSecurityPolicyIssueDetails->jsonSerialize();
		}
		if ($this->sharedArrayBufferIssueDetails !== null) {
			$data->sharedArrayBufferIssueDetails = $this->sharedArrayBufferIssueDetails->jsonSerialize();
		}
		if ($this->twaQualityEnforcementDetails !== null) {
			$data->twaQualityEnforcementDetails = $this->twaQualityEnforcementDetails->jsonSerialize();
		}
		if ($this->lowTextContrastIssueDetails !== null) {
			$data->lowTextContrastIssueDetails = $this->lowTextContrastIssueDetails->jsonSerialize();
		}
		if ($this->corsIssueDetails !== null) {
			$data->corsIssueDetails = $this->corsIssueDetails->jsonSerialize();
		}
		if ($this->attributionReportingIssueDetails !== null) {
			$data->attributionReportingIssueDetails = $this->attributionReportingIssueDetails->jsonSerialize();
		}
		if ($this->quirksModeIssueDetails !== null) {
			$data->quirksModeIssueDetails = $this->quirksModeIssueDetails->jsonSerialize();
		}
		if ($this->navigatorUserAgentIssueDetails !== null) {
			$data->navigatorUserAgentIssueDetails = $this->navigatorUserAgentIssueDetails->jsonSerialize();
		}
		if ($this->genericIssueDetails !== null) {
			$data->genericIssueDetails = $this->genericIssueDetails->jsonSerialize();
		}
		if ($this->deprecationIssueDetails !== null) {
			$data->deprecationIssueDetails = $this->deprecationIssueDetails->jsonSerialize();
		}
		if ($this->clientHintIssueDetails !== null) {
			$data->clientHintIssueDetails = $this->clientHintIssueDetails->jsonSerialize();
		}
		if ($this->federatedAuthRequestIssueDetails !== null) {
			$data->federatedAuthRequestIssueDetails = $this->federatedAuthRequestIssueDetails->jsonSerialize();
		}
		return $data;
	}
}
