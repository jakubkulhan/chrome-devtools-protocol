<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * The reason why Chrome uses a specific transport protocol for HTTP semantics.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AlternateProtocolUsageEnum
{
	public const ALTERNATIVE_JOB_WON_WITHOUT_RACE = 'alternativeJobWonWithoutRace';
	public const ALTERNATIVE_JOB_WON_RACE = 'alternativeJobWonRace';
	public const MAIN_JOB_WON_RACE = 'mainJobWonRace';
	public const MAPPING_MISSING = 'mappingMissing';
	public const BROKEN = 'broken';
	public const DNS_ALPN_H3_JOB_WON_WITHOUT_RACE = 'dnsAlpnH3JobWonWithoutRace';
	public const DNS_ALPN_H3_JOB_WON_RACE = 'dnsAlpnH3JobWonRace';
	public const UNSPECIFIED_REASON = 'unspecifiedReason';
}
