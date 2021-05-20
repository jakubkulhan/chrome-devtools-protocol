<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Stages of the request to handle. Request will intercept before the request is sent. Response will intercept after the response is received (but before response body is received).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestStageEnum
{
	const REQUEST = 'Request';
	const RESPONSE = 'Response';
}
