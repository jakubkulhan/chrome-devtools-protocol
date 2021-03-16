<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Backend type to use for tracing. `chrome` uses the Chrome-integrated tracing service and is supported on all platforms. `system` is only supported on Chrome OS and uses the Perfetto system tracing service. `auto` chooses `system` when the perfettoConfig provided to Tracing.start specifies at least one non-Chrome data source; otherwise uses `chrome`.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TracingBackendEnum
{
	const AUTO = 'auto';
	const CHROME = 'chrome';
	const SYSTEM = 'system';
}
