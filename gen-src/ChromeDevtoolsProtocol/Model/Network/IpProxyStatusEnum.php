<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Sets Controls for IP Proxy of requests. Page reload is required before the new behavior will be observed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class IpProxyStatusEnum
{
	public const AVAILABLE = 'Available';
	public const FEATURE_NOT_ENABLED = 'FeatureNotEnabled';
	public const MASKED_DOMAIN_LIST_NOT_ENABLED = 'MaskedDomainListNotEnabled';
	public const MASKED_DOMAIN_LIST_NOT_POPULATED = 'MaskedDomainListNotPopulated';
	public const AUTH_TOKENS_UNAVAILABLE = 'AuthTokensUnavailable';
	public const UNAVAILABLE = 'Unavailable';
	public const BYPASSED_BY_DEV_TOOLS = 'BypassedByDevTools';
}
