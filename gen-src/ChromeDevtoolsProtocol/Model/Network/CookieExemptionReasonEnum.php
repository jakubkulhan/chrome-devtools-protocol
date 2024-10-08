<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Types of reasons why a cookie should have been blocked by 3PCD but is exempted for the request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieExemptionReasonEnum
{
	public const NONE = 'None';
	public const USER_SETTING = 'UserSetting';
	public const TPCD_METADATA = 'TPCDMetadata';
	public const TPCD_DEPRECATION_TRIAL = 'TPCDDeprecationTrial';
	public const TOP_LEVEL_T_P_C_D_DEPRECATION_TRIAL = 'TopLevelTPCDDeprecationTrial';
	public const TPCD_HEURISTICS = 'TPCDHeuristics';
	public const ENTERPRISE_POLICY = 'EnterprisePolicy';
	public const STORAGE_ACCESS = 'StorageAccess';
	public const TOP_LEVEL_STORAGE_ACCESS = 'TopLevelStorageAccess';
	public const SCHEME = 'Scheme';
}
