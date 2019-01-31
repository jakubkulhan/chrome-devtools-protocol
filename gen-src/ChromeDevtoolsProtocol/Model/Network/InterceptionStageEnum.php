<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Stages of the interception to begin intercepting. Request will intercept before the request is sent. Response will intercept after the response is received.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InterceptionStageEnum
{
	const REQUEST = 'Request';
	const HEADERS_RECEIVED = 'HeadersReceived';
}
