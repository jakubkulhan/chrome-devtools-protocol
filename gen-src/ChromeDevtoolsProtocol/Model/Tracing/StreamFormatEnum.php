<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Data format of a trace. Can be either the legacy JSON format or the protocol buffer format. Note that the JSON format will be deprecated soon.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StreamFormatEnum
{
	const JSON = 'json';
	const PROTO = 'proto';
}
