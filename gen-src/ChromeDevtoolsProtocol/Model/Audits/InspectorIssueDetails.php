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

	/** @var LowTextContrastIssueDetails|null */
	public $lowTextContrastIssueDetails;

	/** @var CorsIssueDetails|null */
	public $corsIssueDetails;

	/** @var AttributionReportingIssueDetails|null */
	public $attributionReportingIssueDetails;

	/** @var QuirksModeIssueDetails|null */
	public $quirksModeIssueDetails;

	/** @var PartitioningBlobURLIssueDetails|null */
	public $partitioningBlobURLIssueDetails;

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

	/** @var BounceTrackingIssueDetails|null */
	public $bounceTrackingIssueDetails;

	/** @var CookieDeprecationMetadataIssueDetails|null */
	public $cookieDeprecationMetadataIssueDetails;

	/** @var StylesheetLoadingIssueDetails|null */
	public $stylesheetLoadingIssueDetails;

	/** @var PropertyRuleIssueDetails|null */
	public $propertyRuleIssueDetails;

	/** @var FederatedAuthUserInfoRequestIssueDetails|null */
	public $federatedAuthUserInfoRequestIssueDetails;

	/** @var SharedDictionaryIssueDetails|null */
	public $sharedDictionaryIssueDetails;

	/** @var ElementAccessibilityIssueDetails|null */
	public $elementAccessibilityIssueDetails;

	/** @var SRIMessageSignatureIssueDetails|null */
	public $sriMessageSignatureIssueDetails;

	/** @var UnencodedDigestIssueDetails|null */
	public $unencodedDigestIssueDetails;

	/** @var ConnectionAllowlistIssueDetails|null */
	public $connectionAllowlistIssueDetails;

	/** @var UserReidentificationIssueDetails|null */
	public $userReidentificationIssueDetails;

	/** @var PermissionElementIssueDetails|null */
	public $permissionElementIssueDetails;

	/** @var PerformanceIssueDetails|null */
	public $performanceIssueDetails;

	/** @var SelectivePermissionsInterventionIssueDetails|null */
	public $selectivePermissionsInterventionIssueDetails;


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
		if (isset($data->partitioningBlobURLIssueDetails)) {
			$instance->partitioningBlobURLIssueDetails = PartitioningBlobURLIssueDetails::fromJson($data->partitioningBlobURLIssueDetails);
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
		if (isset($data->bounceTrackingIssueDetails)) {
			$instance->bounceTrackingIssueDetails = BounceTrackingIssueDetails::fromJson($data->bounceTrackingIssueDetails);
		}
		if (isset($data->cookieDeprecationMetadataIssueDetails)) {
			$instance->cookieDeprecationMetadataIssueDetails = CookieDeprecationMetadataIssueDetails::fromJson($data->cookieDeprecationMetadataIssueDetails);
		}
		if (isset($data->stylesheetLoadingIssueDetails)) {
			$instance->stylesheetLoadingIssueDetails = StylesheetLoadingIssueDetails::fromJson($data->stylesheetLoadingIssueDetails);
		}
		if (isset($data->propertyRuleIssueDetails)) {
			$instance->propertyRuleIssueDetails = PropertyRuleIssueDetails::fromJson($data->propertyRuleIssueDetails);
		}
		if (isset($data->federatedAuthUserInfoRequestIssueDetails)) {
			$instance->federatedAuthUserInfoRequestIssueDetails = FederatedAuthUserInfoRequestIssueDetails::fromJson($data->federatedAuthUserInfoRequestIssueDetails);
		}
		if (isset($data->sharedDictionaryIssueDetails)) {
			$instance->sharedDictionaryIssueDetails = SharedDictionaryIssueDetails::fromJson($data->sharedDictionaryIssueDetails);
		}
		if (isset($data->elementAccessibilityIssueDetails)) {
			$instance->elementAccessibilityIssueDetails = ElementAccessibilityIssueDetails::fromJson($data->elementAccessibilityIssueDetails);
		}
		if (isset($data->sriMessageSignatureIssueDetails)) {
			$instance->sriMessageSignatureIssueDetails = SRIMessageSignatureIssueDetails::fromJson($data->sriMessageSignatureIssueDetails);
		}
		if (isset($data->unencodedDigestIssueDetails)) {
			$instance->unencodedDigestIssueDetails = UnencodedDigestIssueDetails::fromJson($data->unencodedDigestIssueDetails);
		}
		if (isset($data->connectionAllowlistIssueDetails)) {
			$instance->connectionAllowlistIssueDetails = ConnectionAllowlistIssueDetails::fromJson($data->connectionAllowlistIssueDetails);
		}
		if (isset($data->userReidentificationIssueDetails)) {
			$instance->userReidentificationIssueDetails = UserReidentificationIssueDetails::fromJson($data->userReidentificationIssueDetails);
		}
		if (isset($data->permissionElementIssueDetails)) {
			$instance->permissionElementIssueDetails = PermissionElementIssueDetails::fromJson($data->permissionElementIssueDetails);
		}
		if (isset($data->performanceIssueDetails)) {
			$instance->performanceIssueDetails = PerformanceIssueDetails::fromJson($data->performanceIssueDetails);
		}
		if (isset($data->selectivePermissionsInterventionIssueDetails)) {
			$instance->selectivePermissionsInterventionIssueDetails = SelectivePermissionsInterventionIssueDetails::fromJson($data->selectivePermissionsInterventionIssueDetails);
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
		if ($this->partitioningBlobURLIssueDetails !== null) {
			$data->partitioningBlobURLIssueDetails = $this->partitioningBlobURLIssueDetails->jsonSerialize();
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
		if ($this->bounceTrackingIssueDetails !== null) {
			$data->bounceTrackingIssueDetails = $this->bounceTrackingIssueDetails->jsonSerialize();
		}
		if ($this->cookieDeprecationMetadataIssueDetails !== null) {
			$data->cookieDeprecationMetadataIssueDetails = $this->cookieDeprecationMetadataIssueDetails->jsonSerialize();
		}
		if ($this->stylesheetLoadingIssueDetails !== null) {
			$data->stylesheetLoadingIssueDetails = $this->stylesheetLoadingIssueDetails->jsonSerialize();
		}
		if ($this->propertyRuleIssueDetails !== null) {
			$data->propertyRuleIssueDetails = $this->propertyRuleIssueDetails->jsonSerialize();
		}
		if ($this->federatedAuthUserInfoRequestIssueDetails !== null) {
			$data->federatedAuthUserInfoRequestIssueDetails = $this->federatedAuthUserInfoRequestIssueDetails->jsonSerialize();
		}
		if ($this->sharedDictionaryIssueDetails !== null) {
			$data->sharedDictionaryIssueDetails = $this->sharedDictionaryIssueDetails->jsonSerialize();
		}
		if ($this->elementAccessibilityIssueDetails !== null) {
			$data->elementAccessibilityIssueDetails = $this->elementAccessibilityIssueDetails->jsonSerialize();
		}
		if ($this->sriMessageSignatureIssueDetails !== null) {
			$data->sriMessageSignatureIssueDetails = $this->sriMessageSignatureIssueDetails->jsonSerialize();
		}
		if ($this->unencodedDigestIssueDetails !== null) {
			$data->unencodedDigestIssueDetails = $this->unencodedDigestIssueDetails->jsonSerialize();
		}
		if ($this->connectionAllowlistIssueDetails !== null) {
			$data->connectionAllowlistIssueDetails = $this->connectionAllowlistIssueDetails->jsonSerialize();
		}
		if ($this->userReidentificationIssueDetails !== null) {
			$data->userReidentificationIssueDetails = $this->userReidentificationIssueDetails->jsonSerialize();
		}
		if ($this->permissionElementIssueDetails !== null) {
			$data->permissionElementIssueDetails = $this->permissionElementIssueDetails->jsonSerialize();
		}
		if ($this->performanceIssueDetails !== null) {
			$data->performanceIssueDetails = $this->performanceIssueDetails->jsonSerialize();
		}
		if ($this->selectivePermissionsInterventionIssueDetails !== null) {
			$data->selectivePermissionsInterventionIssueDetails = $this->selectivePermissionsInterventionIssueDetails->jsonSerialize();
		}
		return $data;
	}
}
