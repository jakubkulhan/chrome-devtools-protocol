<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Details exposed when memory request explicitly declared. Keep consistent with memory_dump_request_args.h and memory_instrumentation.mojom
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MemoryDumpLevelOfDetailEnum
{
	const BACKGROUND = 'background';
	const LIGHT = 'light';
	const DETAILED = 'detailed';
}
