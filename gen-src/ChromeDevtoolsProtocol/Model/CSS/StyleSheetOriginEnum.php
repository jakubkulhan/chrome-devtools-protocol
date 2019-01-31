<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Stylesheet type: "injected" for stylesheets injected via extension, "user-agent" for user-agent stylesheets, "inspector" for stylesheets created by the inspector (i.e. those holding the "via inspector" rules), "regular" for regular stylesheets.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StyleSheetOriginEnum
{
	const INJECTED = 'injected';
	const USER_AGENT = 'user-agent';
	const INSPECTOR = 'inspector';
	const REGULAR = 'regular';
}
