<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Values of named type Network.LocalNetworkAccessRequestPolicy.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LocalNetworkAccessRequestPolicyEnum
{
	public const ALLOW = 'Allow';
	public const BLOCK_FROM_INSECURE_TO_MORE_PRIVATE = 'BlockFromInsecureToMorePrivate';
	public const WARN_FROM_INSECURE_TO_MORE_PRIVATE = 'WarnFromInsecureToMorePrivate';
	public const PERMISSION_BLOCK = 'PermissionBlock';
	public const PERMISSION_WARN = 'PermissionWarn';
}
